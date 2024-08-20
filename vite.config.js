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
        }),
    ],
    server: {
        host: 'localhost', // Especifica el host
        port: 5174,        // Especifica el puerto
        strictPort: true,  // No cambiará el puerto si está en uso
    },
});