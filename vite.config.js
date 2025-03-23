import { defineConfig } from 'vite';
import legacy from '@vitejs/plugin-legacy';
import { resolve } from 'path';
import fs from 'fs';

// Vérification des fichiers d'entrée existants
const inputFiles = {
    main: resolve(__dirname, 'public/assets/js/main.js'),
};

// Ajout conditionnel des autres entrées si les fichiers existent
const adminJsPath = resolve(__dirname, 'public/assets/js/admin.js');
if (fs.existsSync(adminJsPath)) {
    inputFiles.admin = adminJsPath;
}

const mainScssPath = resolve(__dirname, 'public/assets/css/style.css');
if (fs.existsSync(mainScssPath)) {
    inputFiles.style = mainScssPath;
}

export default defineConfig({
    plugins: [
        legacy({
            targets: ['> 1%', 'last 2 versions', 'not dead'],
        }),
    ],
    base: './', // Changé pour un déploiement sur Hostinger
    build: {
        outDir: './dist',
        assetsDir: 'assets',
        manifest: true,
        rollupOptions: {
            input: inputFiles,
            output: {
                entryFileNames: 'assets/js/[name].[hash].js',
                chunkFileNames: 'assets/js/[name].[hash].js',
                assetFileNames: ({ name }) => {
                    if (/\.(gif|jpe?g|png|svg)$/.test(name ?? '')) {
                        return 'assets/images/[name].[hash][extname]';
                    }
                    if (/\.css$/.test(name ?? '')) {
                        return 'assets/css/[name].[hash][extname]';
                    }
                    if (/\.woff2?$/.test(name ?? '')) {
                        return 'assets/fonts/[name].[hash][extname]';
                    }
                    return 'assets/[name].[hash][extname]';
                },
            },
        },
        minify: true,
        sourcemap: false, // Désactivé pour la production
    },
    server: {
        host: true,
        port: 3000,
        strictPort: true,
        proxy: {
            '/api': {
                target: 'http://localhost:80',
                changeOrigin: true,
            },
        },
    },
    resolve: {
        alias: {
            '@': resolve(__dirname, 'public/assets'),
        },
    },
    css: {
        devSourcemap: true,
    },
    optimizeDeps: {
        include: [
            '@fortawesome/fontawesome-free',
            'aos',
            'axios',
            'bootstrap',
            'highlight.js',
            'i18next',
            'marked',
            'sweetalert2',
            'swiper',
            'tippy.js',
        ],
    },
}); 