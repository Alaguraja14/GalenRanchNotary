/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                litePink: "#ED9393",
                black252B42: "#252B42",
                silver: "#808080",
                liteGrey: "#C0C0C0",
            }
        },
    },
    plugins: [],
}