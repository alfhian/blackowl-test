import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/user.js', 'DataTables/datatables.min.css', 'DataTables/datatables.min.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: [
            {
                // this is required for the SCSS modules
                find: /^~(.*)$/,
                replacement: '$1',
            },
        ],
    },
});
