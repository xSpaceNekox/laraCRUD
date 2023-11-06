const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        fontFamily: {
            custom: ["ShadowsIntoLight", "cursive"],
            primary: "Montserrat",
            body: "work Sans",
        },
        container: {
            padding: {
                DEFAULT: "1rem",
                lg: "3rem",
            },
        },
        extend: {
            colors: {
                "light-primary": "#5f22d9", //purple heart
                "light-secondary": "#51d6ca", //viking
                "light-tail-100": "#A9DED2",
                "light-tail-500": "#54BAB9",
                "light-black": "#010101", //black
                accent: {
                    DEFAULT: "#e4e4e4",
                    hover: "#ac73ff",
                },
                paragraph: "#010101",
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: "#c82b28", //persian Red
                yellow: "#d7ad0d", //Galliano
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
