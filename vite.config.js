import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/Games/index.js',
<<<<<<< HEAD
                'resources/css/welcome.css',
                'resources/css/style.css'
=======
                'resources/css/welcome.css'
>>>>>>> 32cdf8a6ddee96c9e9d2542792328837c9697fbd
            ],
            refresh: true,
        }),
    ],
});
