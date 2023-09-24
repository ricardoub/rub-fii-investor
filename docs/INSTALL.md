# INSTALL

## LARAVEL

```bash
composer create-project laravel/laravel rub-fii-investor
npm install
npm run dev
npm run build
php artisan migrate
```

## FIRST COMMIT

```bash
git init
git branch -M main
git remote add origin https://github.com/ricardoub/rub-fii-investor.git
git add .
git commit -m "FIRST COMMIT: laravel install"
git push -u origin main
```

## DEPENDENCIAS

### [Getting Started with TALL stack](https://devdojo.com/thinkverse/getting-started-with-tall-stack)

```bash
composer require laravel/jetstream
php artisan jetstream:install livewire
php artisan migrate
composer require livewire/livewire
```

### Editar o arquivo [vite.config.js] conforme abaixo

```js
import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
});
```

```bash
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

### Editar o arquivo [tailwind.config.js] conforme abaixo

```js
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [],
};
```

### Editar o arquivo [resources/css/app.css] conforme abaixo

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### Editar o arquivo [resources/views/layout/app.blade.php] conforme abaixo, incluindo no final do arquivo

```php
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

```bash
npm run dev
npm run build
npm install alpinejs
```

### Editar o arquivo [resources/js/bootstrap.js] e acrescentar as linhas abaixo ao final do arquivo

```javascript
import Alpine from 'alpinejs'
Alpine.start()
window.Alpine = Alpine
```

```bash
npm run build
```

## TAILWIND-ELEMENTS

```bash
npm install tw-elements
```

### Editar o arquivo [tailwind.config.js] e incluir as configurações do tw-elements

```js
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.js',

        "./node_modules/tw-elements/dist/js/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    darkMode: "class",
    plugins: [require("tw-elements/dist/plugin.cjs")]
};
```

### Editar o arquivo [resources/js/app.js] e incluir as configurações do tw-elements

```javascript
import { Datepicker, Input, initTE } from "tw-elements";
initTE({ Datepicker, Input });
```

```bash
npm run build
```

## ROLES

```bash
composer require santigarcor/laratrust
php artisan vendor:publish --tag="laratrust"
php artisan laratrust:setup
```

### Editar o model [User] conforme abaixo

```php
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements LaratrustUser
{
    use HasRolesAndPermissions;

    // ...
}
```

```bash
composer dump-autoload
php artisan migrate
```
