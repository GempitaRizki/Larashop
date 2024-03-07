import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',

                'resources/views/themes/marketplaceg/assets/css/main.css',
                'resources/views/themes/marketplaceg/assets/plugins/jqueryui/jquery-ui.css',

                'resources/views/themes/marketplaceg/assets/js/main.js',
                'resources/views/themes/marketplaceg/assets/plugins/jqueryui/jquery-ui.min.js',

            ],
            refresh: true,
        }),
    ],
});
