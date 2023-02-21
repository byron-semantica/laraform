import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    resolve: {
        alias: {
          vue: 'vue/dist/vue.esm.js',
        },
      },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',  'resources/scss/app.scss'],
            refresh: true,
        }),
    ],
});
