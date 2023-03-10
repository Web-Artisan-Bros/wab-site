import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/styles/app.scss',
        'resources/js/app.js',
        'resources/styles/admin.scss',
        'resources/js/admin.js'
      ],
      refresh: [
        ...refreshPaths,
        'app/Http/Livewire/**'
      ],
      publicDirectory: 'public'
    })
  ],
  resolve: {
    alias: {
      "@": "/public",
    },
  },
})
