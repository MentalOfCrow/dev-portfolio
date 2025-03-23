import { defineConfig } from 'vite';
import legacy from '@vitejs/plugin-legacy';
import { resolve } from 'path';

export default defineConfig({
    plugins: [
        legacy({
            targets: ['> 1%', 'last 2 versions', 'not dead'],
        }),
    ],
    root: './frontend',
    base: '/portfolio/',
    build: {
        outDir: '../public/assets',
        assetsDir: '',
        manifest: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'frontend/assets/js/main.js'),
                admin: resolve(__dirname, 'frontend/assets/js/admin.js'),
                style: resolve(__dirname, 'frontend/assets/css/main.scss'),
            },
            output: {
                entryFileNames: 'js/[name].[hash].js',
                chunkFileNames: 'js/[name].[hash].js',
                assetFileNames: ({ name }) => {
                    if (/\.(gif|jpe?g|png|svg)$/.test(name ?? '')) {
                        return 'images/[name].[hash][extname]';
                    }
                    if (/\.css$/.test(name ?? '')) {
                        return 'css/[name].[hash][extname]';
                    }
                    if (/\.woff2?$/.test(name ?? '')) {
                        return 'fonts/[name].[hash][extname]';
                    }
                    return '[name].[hash][extname]';
                },
            },
        },
        minify: true,
        sourcemap: true,
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
            '@': resolve(__dirname, 'frontend/assets'),
        },
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                    @import "@/css/variables";
                    @import "@/css/mixins";
                `,
            },
        },
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