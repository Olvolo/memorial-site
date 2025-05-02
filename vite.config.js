import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import svgLoader from 'vite-svg-loader';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        svgLoader({
            svgoConfig: {
                multipass: true
            }
        }),
    ],
    build: {
        outDir: 'public/build',
        manifest: true,
        emptyOutDir: true,
    },
});
