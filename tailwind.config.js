import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
    ],
    safelist: [
        'bg-red-200',
        'text-red-800',
        'bg-rose-200',
        'text-rose-800',
        'bg-green-200',
        'text-green-800',
        'bg-lime-200',
        'text-lime-800',
        'bg-slate-200',
        'text-slate-800',
        'bg-orange-200',
        'text-orange-800',
        'bg-blue-200',
        'text-blue-800',
        'bg-sky-200',
        'text-sky-800',
        'bg-indigo-200',
        'text-indigo-800',
        'bg-yellow-200',
        'text-yellow-800',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        fontSize: {
            xxs: '0.625rem', // '10px
            xs: '0.75rem',
            sm: '0.8rem',
            base: '1rem',
            xl: '1.25rem',
            '2xl': '1.563rem',
            '3xl': '1.953rem',
            '4xl': '2.441rem',
            '5xl': '3.052rem',
        },
    },

    plugins: [forms],
};
