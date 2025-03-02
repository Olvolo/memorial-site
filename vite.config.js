import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        port: 1500,
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/ethics-buddhism.css', // Обновлённый путь
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});

