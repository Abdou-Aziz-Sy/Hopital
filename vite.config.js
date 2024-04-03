import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin.css',
                'resources/css/style.css',
                'resources/css/login.css',
                'resources/css/login.js',
                'resources/css/style.scss',
                'resources/css/responsive.css',
                'resources/css/sidebar.css',
                'resources/css/bootstrap.min.css',
                'resources/css/apps.css',
                'resources/css/app.css',
                'resources/css/welcome.js',
                'resources/js/app.js',
                'resources/js/dashboard.js',
                'resources/js/bootstrap.js',
            ],
            refresh: true,
        }),
    ],
});
