<?php
$skillGroups = [
    [
        'index' => '01',
        'titleFr' => 'Cybersécurité & infrastructure',
        'titleEn' => 'Cybersecurity & infrastructure',
        'descriptionFr' => 'Environnements, outils et pratiques utilisés pour analyser, administrer, observer et sécuriser.',
        'descriptionEn' => 'Environments, tools and practices used to analyze, administer, observe and secure.',
        'items' => [
            ['KALI', 'Kali Linux', 'https://www.kali.org/docs/'],
            ['EXE', 'Exegol', 'https://docs.exegol.com/'],
            ['DOCK', 'Docker', 'https://docs.docker.com/get-started/'],
            ['VMW', 'VMware Workstation', 'https://techdocs.broadcom.com/us/en/vmware-cis/desktop-hypervisors/workstation-pro/17-0.html'],
            ['WS', 'Windows Server', 'https://learn.microsoft.com/windows-server/'],
            ['GRAF', 'Grafana', 'https://grafana.com/docs/grafana/latest/'],
            ['NMAP', 'Nmap', 'https://nmap.org/book/man.html'],
            ['BURP', 'Burp Suite', 'https://portswigger.net/burp/documentation'],
            ['WIRE', 'Wireshark', 'https://www.wireshark.org/docs/'],
            ['OWASP', 'OWASP', 'https://owasp.org/www-project-top-ten/'],
        ],
    ],
    [
        'index' => '02',
        'titleFr' => 'Langages & web',
        'titleEn' => 'Languages & web',
        'descriptionFr' => 'Du navigateur aux services back-end, avec plusieurs écosystèmes adaptés au besoin.',
        'descriptionEn' => 'From the browser to back-end services, using several ecosystems according to the need.',
        'items' => [
            ['HTML', 'HTML5', 'https://developer.mozilla.org/docs/Learn_web_development/Core/Structuring_content'],
            ['CSS', 'CSS3', 'https://developer.mozilla.org/docs/Learn_web_development/Core/Styling_basics'],
            ['JS', 'JavaScript', 'https://developer.mozilla.org/docs/Web/JavaScript/Guide'],
            ['TS', 'TypeScript', 'https://www.typescriptlang.org/docs/handbook/intro.html'],
            ['PHP', 'PHP', 'https://www.php.net/manual/fr/'],
            ['PY', 'Python', 'https://docs.python.org/3/tutorial/'],
            ['GO', 'Go', 'https://go.dev/learn/'],
            ['JAVA', 'Java', 'https://dev.java/learn/'],
            ['C#', 'C#', 'https://learn.microsoft.com/dotnet/csharp/'],
            ['SH', 'Shell', 'https://www.gnu.org/software/bash/manual/'],
        ],
    ],
    [
        'index' => '03',
        'titleFr' => 'Frameworks & interfaces',
        'titleEn' => 'Frameworks & interfaces',
        'descriptionFr' => 'Des interfaces classiques aux expériences interactives et 3D.',
        'descriptionEn' => 'From classic interfaces to interactive and 3D experiences.',
        'items' => [
            ['NODE', 'Node.js', 'https://nodejs.org/en/learn/getting-started/introduction-to-nodejs'],
            ['RE', 'React', 'https://react.dev/learn'],
            ['VUE', 'Vue.js', 'https://vuejs.org/tutorial/'],
            ['NG', 'Angular', 'https://angular.dev/tutorials'],
            ['3JS', 'Three.js', 'https://threejs.org/manual/'],
            ['TW', 'Tailwind CSS', 'https://tailwindcss.com/docs/installation'],
            ['FAST', 'FastAPI', 'https://fastapi.tiangolo.com/tutorial/'],
        ],
    ],
    [
        'index' => '04',
        'titleFr' => 'Mobile & temps réel',
        'titleEn' => 'Mobile & real time',
        'descriptionFr' => 'Flutter en priorité, complété par les environnements mobiles, jeu et messagerie IoT.',
        'descriptionEn' => 'Flutter first, completed by mobile, game and IoT messaging environments.',
        'items' => [
            ['FL', 'Flutter', 'https://docs.flutter.dev/get-started/learn-flutter'],
            ['DART', 'Dart', 'https://dart.dev/tutorials'],
            ['RN', 'React Native', 'https://reactnative.dev/docs/getting-started'],
            ['UNITY', 'Unity', 'https://learn.unity.com/'],
            ['MQTT', 'MQTT', 'https://mqtt.org/getting-started/'],
        ],
    ],
    [
        'index' => '05',
        'titleFr' => 'Données & bases',
        'titleEn' => 'Data & databases',
        'descriptionFr' => 'Bases relationnelles, plate-forme back-end et modélisation orientée graphe.',
        'descriptionEn' => 'Relational databases, back-end platform and graph-oriented modelling.',
        'items' => [
            ['SUPA', 'Supabase', 'https://supabase.com/docs'],
            ['MYSQL', 'MySQL', 'https://dev.mysql.com/doc/'],
            ['MARIA', 'MariaDB', 'https://mariadb.com/docs/'],
            ['PG', 'PostgreSQL', 'https://www.postgresql.org/docs/'],
            ['NEO', 'Neo4j', 'https://neo4j.com/docs/'],
            ['CYPH', 'Cypher', 'https://neo4j.com/docs/cypher-manual/current/'],
        ],
    ],
    [
        'index' => '06',
        'titleFr' => 'Outils & livraison',
        'titleEn' => 'Tools & delivery',
        'descriptionFr' => 'Versionnement, poste de travail, automatisation et pipelines de qualité.',
        'descriptionEn' => 'Version control, workstation tooling, automation and quality pipelines.',
        'items' => [
            ['GIT', 'Git', 'https://git-scm.com/doc'],
            ['GHD', 'GitHub Desktop', 'https://docs.github.com/desktop'],
            ['CI', 'CI/CD', 'https://docs.github.com/actions'],
            ['GHA', 'GitHub Actions', 'https://docs.github.com/actions/quickstart'],
            ['GL', 'GitLab CI/CD', 'https://docs.gitlab.com/ci/'],
            ['VSC', 'VS Code', 'https://code.visualstudio.com/docs'],
        ],
    ],
];
?>

<main id="main-content">
    <section class="page-hero section">
        <div class="shell page-hero-grid">
            <div data-reveal>
                <span class="eyebrow"><span lang="fr">Stack technique</span><span lang="en">Technical stack</span> · 2026</span>
                <h1><span lang="fr">Une matrice compacte, lisible et directement exploitable.</span><span lang="en">A compact, readable and directly useful matrix.</span></h1>
            </div>
            <div class="page-intro" data-reveal>
                <p lang="fr">Chaque technologie est alignée, classée par usage et reliée à sa documentation officielle. Cette liste présente les environnements déjà pratiqués, sans prétendre au même niveau d’expertise partout.</p>
                <p lang="en">Every technology is aligned, organized by use and linked to its official documentation. This list shows environments I have practiced without claiming equal expertise in all of them.</p>
            </div>
        </div>
    </section>

    <section class="section section-contrast">
        <div class="shell skill-matrix">
            <?php foreach ($skillGroups as $group): ?>
                <article class="skill-group" data-reveal>
                    <header class="skill-group-header">
                        <span><?= escape($group['index']) ?></span>
                        <div>
                            <h2><span lang="fr"><?= escape($group['titleFr']) ?></span><span lang="en"><?= escape($group['titleEn']) ?></span></h2>
                            <p><span lang="fr"><?= escape($group['descriptionFr']) ?></span><span lang="en"><?= escape($group['descriptionEn']) ?></span></p>
                        </div>
                    </header>
                    <div class="tech-grid">
                        <?php foreach ($group['items'] as [$short, $name, $url]): ?>
                            <a class="tech-item" href="<?= escape($url) ?>" target="_blank" rel="noopener noreferrer" title="<?= escape($name) ?> — documentation officielle">
                                <span class="tech-mark" aria-hidden="true"><?= escape($short) ?></span>
                                <strong><?= escape($name) ?></strong>
                                <span class="tech-arrow" aria-hidden="true">↗</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section section-compact">
        <div class="shell note-panel" data-reveal>
            <span class="eyebrow"><span lang="fr">Lecture de la stack</span><span lang="en">Reading the stack</span></span>
            <h2><span lang="fr">La technologie reste un moyen.</span><span lang="en">Technology remains a means.</span></h2>
            <p lang="fr">Je choisis les outils selon le contexte, la sécurité, la maintenabilité et les contraintes d’exploitation — pas pour accumuler des logos.</p>
            <p lang="en">I choose tools according to context, security, maintainability and operational constraints—not to accumulate logos.</p>
        </div>
    </section>
</main>
