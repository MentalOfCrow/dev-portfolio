import { readdirSync, readFileSync, statSync } from 'node:fs';
import { dirname, extname, join, relative, resolve } from 'node:path';
import { spawnSync } from 'node:child_process';
import { fileURLToPath } from 'node:url';

const root = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const excluded = new Set(['.git', '.private-archive', '.audit-artifacts', 'graphify-out', 'node_modules', 'vendor']);
const textExtensions = new Set(['.php', '.html', '.css', '.js', '.mjs', '.md', '.json', '.htaccess', '.txt']);
const errors = [];

function walk(directory) {
    return readdirSync(directory, { withFileTypes: true }).flatMap((entry) => {
        if (excluded.has(entry.name)) return [];
        const fullPath = join(directory, entry.name);
        return entry.isDirectory() ? walk(fullPath) : [fullPath];
    });
}

const files = walk(root);
const phpFiles = files.filter((file) => extname(file) === '.php');
const sourceFiles = files.filter((file) => textExtensions.has(extname(file)) || file.endsWith('.htaccess'));

for (const file of phpFiles) {
    const result = spawnSync('php', ['-l', file], { encoding: 'utf8' });
    if (result.status !== 0) {
        errors.push(`${relative(root, file)}: ${result.stderr.trim() || result.stdout.trim()}`);
    }
}

const forbiddenPublicReferences = [
    'Rapport_Stage_MEB_2023-2024.pdf',
    'Rapport_Stage_SHF_2024-2025.pdf',
    '/assets/docs/',
];

const secretPatterns = [
    /github_pat_[A-Za-z0-9_]{20,}/,
    /gh[opsu]_[A-Za-z0-9]{30,}/,
    /-----BEGIN (?:RSA |EC |OPENSSH )?PRIVATE KEY-----/,
    /(?:api[_-]?key|secret|token)\s*[=:]\s*["'][^"']{12,}["']/i,
];

for (const file of sourceFiles) {
    const content = readFileSync(file, 'utf8');
    const label = relative(root, file);

    for (const reference of forbiddenPublicReferences) {
        if (content.includes(reference) && !label.startsWith('docs/') && !label.startsWith('scripts/')) {
            errors.push(`${label}: référence publique interdite vers ${reference}`);
        }
    }

    for (const pattern of secretPatterns) {
        if (pattern.test(content)) {
            errors.push(`${label}: motif ressemblant à un secret détecté`);
        }
    }
}

const markupFiles = phpFiles.filter((file) => file.includes(`${join('views', '')}`));
for (const file of markupFiles) {
    const content = readFileSync(file, 'utf8');
    const label = relative(root, file);

    if (/<script(?![^>]*\bsrc=)[^>]*>/i.test(content)) {
        errors.push(`${label}: script inline incompatible avec la CSP`);
    }
    if (/<style\b/i.test(content) || /\son[a-z]+\s*=/i.test(content)) {
        errors.push(`${label}: style ou gestionnaire d’événement inline incompatible avec la CSP`);
    }

    for (const match of content.matchAll(/<a\b([^>]*\btarget=["']_blank["'][^>]*)>/gi)) {
        if (!/\brel=["'][^"']*noopener[^"']*noreferrer[^"']*["']/i.test(match[1])) {
            errors.push(`${label}: lien target=_blank sans rel=noopener noreferrer`);
        }
    }

    for (const match of content.matchAll(/(?:src|href)=["'](\/[A-Za-z0-9_./-]+)["']/g)) {
        const target = match[1];
        if (!target.includes('.') || target.endsWith('.php')) continue;
        const localPath = resolve(root, target.slice(1));
        try {
            if (!statSync(localPath).isFile()) errors.push(`${label}: ressource absente ${target}`);
        } catch {
            errors.push(`${label}: ressource absente ${target}`);
        }
    }
}

const requiredPages = ['home', 'about', 'skills', 'experiences', 'projects', 'contact', 'cv', 'mentions-legales', 'politique-confidentialite', '404'];
for (const page of requiredPages) {
    const path = join(root, 'views', 'pages', `${page}.php`);
    try {
        if (!statSync(path).isFile()) errors.push(`Page requise absente: ${page}`);
    } catch {
        errors.push(`Page requise absente: ${page}`);
    }
}

if (errors.length > 0) {
    console.error(`Validation échouée (${errors.length} problème${errors.length > 1 ? 's' : ''})`);
    errors.forEach((error) => console.error(`- ${error}`));
    process.exit(1);
}

console.log(`Validation réussie: ${phpFiles.length} fichiers PHP et ${sourceFiles.length} fichiers texte contrôlés.`);
