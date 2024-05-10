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
                'xs': "390px",
                '3xl':'1920px',
                'max': "2200px",
            },
            colors: {
                primary: {
                    400: "#b08353",
                    600:'#8c6842'
                },
                secondary: {
                    400: "#202e20",
                    600:'#172117'
                },
                bgPrimary: "#fffcf4",
                bgSecondary: "#202e20",
                bgThird: "#fdf0e2",
                bgFourth:'#f1cfc3',

                fontWhite:"#ffffff",
                fontPrimary:"#b08353",
                fontSecondary:"#fab6ae",
                fontThird:"#676e5c"
            },
            fontFamily:{
            //   headingPrimary:[ "Nunito Sans", "sans-serif"],
              headingSecondary:[  "Maitree", "serif"],
              text:[ "Roboto Slab", "serif"],
              primary:[  "Maitree", "serif"],
              secondary:[  "Roboto Slab", "serif"],
            }
        },
    },
    plugins: [],
};
