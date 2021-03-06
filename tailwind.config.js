module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        yekan: ["iranyekan"],
      },
      colors:{
        custom:{
          green : "#57CC99",
          black : "#282727",
          blue  : "#42A9E3",
          red   : "#EB4559",
          orange: "#FF6767"
        },
        gray:{
          background: "#F3F3F3",
          light: "#D8D2D2",
          dark: "#958F8F"
        }
      },
      minWidth: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '3/4': '75%',
        'full': '100%',
      },
      fontSize: {
        '3xs' : '.25rem',
        '2xs' : ".5rem"
      }
    }
  },
  variants: {
    extend: {
      width: ['hover','group-hover', 'focus'],
      display: ["group-hover"],
    },
  },
  plugins: [
    require("tailwindcss-rtl"),
    require('@tailwindcss/forms'),
  ],
}
