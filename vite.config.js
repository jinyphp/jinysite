import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/css/tailwind.scss',
                'resources/js/app.js',
                'resources/js/chart.js',

                //'resources/css/geeks/theme.scss',
            ],
            refresh: true,
        }),
    ],
});
