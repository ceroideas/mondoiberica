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
                nunito: ['Nunito Sans', ...defaultTheme.fontFamily.sans],
                bebas: ['Bebas Neue', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                blue: {
                    light: '#F5FAFE',
                    lighter: '#93C5FD',
                    DEFAULT: '#0076C0',
                    dark: '#002746'
                },
                sky: {
                    50 : '#D7F2FE',
                    500: '#5CC3F1'
                },
                gray: {
                    light: '#B0BBCA',
                    DEFAULT: '#637193'
                }
            },
            maxWidth: {
                '8xl': '90rem',
                '9xl': '100rem',
                '10xl': '110rem'
            },
            height: {
                '90vh': '90vh'
            },
            boxShadow: {
                'mondo': '0px 0px 15px 0px rgba(0, 0, 0, 0.1)',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
