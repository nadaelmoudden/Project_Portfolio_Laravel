import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontFamily: {
            primary: "Playfair Display",
            body: "Work Sans",
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                lg: "3rem",
            },
        },
        extend: {
            colors: {
                "light-primary": "#A594F9",
                "light-secondary": "#CDC1FF",
                "light-tail-100": "#F5EFFF",
                "light-tail-500": "#E5D9F2",
                "dark-primary": "#050402",
                "dark-secondary": "#3E065F",
                "dark-tail-100": "#700B97",
                "dark-tail-500": "#8E05C2",
                accent: {
                    DEFAULT: "#ac6b34",
                    hover: "#925a2b",
                },
                paragraph: "#878e99",
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: colors.red,
            },
        },
    },
    plugins: [forms],
};
