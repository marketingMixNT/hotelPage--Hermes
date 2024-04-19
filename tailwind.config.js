/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#b08353",
                },
                secondary: {
                    400: "#202e20",
                },
                bgPrimary: "#fdf0e2",
                bgSecondary: "#202e20",

                fontWhite:"#ffffff",
                fontPrimary:"#b08353",
                fontSecondary:"#fab6ae",
                fontThird:"#676e5c"
            },
            fontFamily:{
              headingPrimary:[ "Nunito Sans", "sans-serif"],
              headingSecondary:[  "Maitree", "serif"],
              text:[ "Roboto Slab", "serif"]
            }
        },
    },
    plugins: [],
};
