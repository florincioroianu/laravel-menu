import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                '3xl': '0 5px 10px 2px rgba(0, 0, 0, 0.4)',
            },
            colors: {
                'primary': '#f4f6f9',
                'secondary': '#111827',
                'success': '#22c55e',
                'warning': '#f59e0b',
                'danger': '#ef4444',
                'info': '#5bc0de'
            }
        },
    },

    plugins: [forms],
};
