import { defineConfig } from 'vite';
import path from "path";
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import vueI18n from "@intlify/vite-plugin-vue-i18n";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                /* 'resources/sass/app.scss', */
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    /* base: null, */
                    includeAbsolute: false,
                },
            },
        }),
        vueI18n({
            include: path.resolve("resources/js/locales/**"),
        }),
    ],
    optimizeDeps: {
        include: ["quill", "nouislider"],
    },
    assetsInclude: ["resources/js/assets"],
    resolve: {
        alias: [
            {
                find: /^~(.*)$/,
                replacement: "node_modules/$1",
            },
        ],
    },
});
