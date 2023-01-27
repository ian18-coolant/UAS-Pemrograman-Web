const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#5E8B7E',
                secondary: '#969696',
                three: '#080B10',
                dark: '#0f172a',
            },
            screens: {
                '2xl': '1320px',
            },
        },
        container: {
            padding: {
                DEFAULT: "1rem",
                lg: "2rem",
            },
            center: true,
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
