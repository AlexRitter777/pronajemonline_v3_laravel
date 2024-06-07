import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({



    plugins: [

        laravel({
            input: [

                'resources/css/app.css',
                'resources/js/app.js',

            ],
            refresh: true,

            server: {
                proxy: {
                    // Прокси-сервер, чтобы использовать сервер Laravel
                    '/': {
                        target: 'http://pronajemonline.nw',
                        changeOrigin: true,
                        secure: false,
                        ws: true,
                    },
                },
            },
        }),

    ],

    resolve: {
        alias: {
            '$': 'jQuery',

        },
    },



});
