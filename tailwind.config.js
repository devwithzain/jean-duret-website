import forms from "@tailwindcss/forms";
import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            screens: {
                xm: { max: "519px" },
                sm: { min: "520px", max: "767px" },
                md: { min: "768px", max: "999px" },
                ml: { min: "1000px", max: "1199px" },
                lg: { min: "1200px", max: "1365px" },
                xl: { min: "1366px", max: "1599px" },
                xxl: "1600px",
            },
        },
    },

    plugins: [forms],
};
