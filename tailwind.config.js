import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import merge from 'lodash.merge';
import myPreset from './mypreset';

/** @type {import('tailwindcss').Config} */
export default merge(myPreset, {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'average-sans': ['"Average Sans"', 'sans-serif'],
                'open-sans': ['"Open Sans"', 'sans-serif'],
            },
        },
    },

    plugins: [forms],
});