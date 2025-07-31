import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
    base: './',
    build: {
        outDir: './dist',
        assetsDir: 'assets',
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'assets/js/main.js'),
                style: resolve(__dirname, 'assets/css/style.css'),
            },
        },
    },
    server: {
        host: true,
        port: 3000,
    },
    resolve: {
        alias: {
            '@': resolve(__dirname, 'assets'),
        },
    },
}); 