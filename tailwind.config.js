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
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'asparagus': {
                    '50': '#f4f7ee',
                    '100': '#e7eed9',
                    '200': '#d2dfb7',
                    '300': '#b4c98d',
                    '400': '#98b368',
                    '500': '#799649',
                    '600': '#5f7838',
                    '700': '#4a5d2e',
                    '800': '#3d4b29',
                    '900': '#364126',
                    '950': '#1a2211',
                },
                'japonica': {
                    '50': '#fdf5f3',
                    '100': '#fbe9e5',
                    '200': '#f8d7d0',
                    '300': '#f2bbaf',
                    '400': '#e89481',
                    '500': '#de7b65',
                    '600': '#c7543b',
                    '700': '#a7442e',
                    '800': '#8a3b2a',
                    '900': '#743628',
                    '950': '#3e1911',
                },
            },
        },
    },

    plugins: [forms, typography],
};
