import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
<<<<<<< HEAD
                'resources/js/Games/index.js'
=======
                'resources/js/Games/index.js',
                'resources/css/welcome.css'
>>>>>>> ff6fd197edae9d00c8839d598db335aa854ee7f7
            ],
            refresh: true,
        }),
    ],
});
