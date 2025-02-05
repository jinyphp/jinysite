import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import dartSass from 'sass';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/css/tailwind.scss',
                'resources/js/app.js',
                'resources/js/chart.js',
                //'resources/css/geeks/theme.scss',
                'resources/css/jiny.scss',
                'resources/css/admin/app.scss',
                'resources/js/admin/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        port: 3001,
    },
    css: {
        devSourcemap: true,
        preprocessorOptions: {
            scss: {
                quietDeps: true,
                additionalData: `@use "sass:math";`,
                implementation: dartSass,
            }
        }
    }
});
