import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                // 'resources/css/ethics-buddhism.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Указываем корневую директорию для сборки
        manifest: true, // Генерируем манифест
        emptyOutDir: true, // Очищаем директорию перед сборкой
    },
});
