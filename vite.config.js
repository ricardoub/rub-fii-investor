import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

//export default defineConfig({
//    plugins: [
//        laravel({
//            input: [
//                'resources/css/app.css',
//                'resources/js/app.js',
//            ],
//            refresh: [
//                ...refreshPaths,
//                'app/Livewire/**',
//            ],
//        }),
//    ],
//});

export default defineConfig({
    plugins: [
        laravel([
            'resources/js/app.js',
            'resources/css/app.css',
        ]),
       {
           name: 'blade',
           handleHotUpdate({ file, server }) {
               if (file.endsWith('.blade.php')) {
                   server.ws.send({
                       type: 'full-reload',
                       path: '*',
                   });
               }
           },
       }
    ],
})
