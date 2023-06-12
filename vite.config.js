import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/notes.css',
                'resources/css/home.css', 
                'resources/css/add.css', 
                'resources/css/login.css',  
                'resources/js/app.js',
                'resources/js/add.js',
                'resources/js/home.js',
                'resources/js/add.js',
                'resources/js/login.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery'
        },
    },
});
