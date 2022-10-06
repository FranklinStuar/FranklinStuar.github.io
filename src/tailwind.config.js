/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../**/*.{php, html}", './node_modules/tw-elements/dist/js/**/*.js'],
  theme: {
    fontFamily: { 
      Primary: ["Open Sans", "sans-serif"],
      Secondary: ["Cabin", "sans-serif"],
      Tertiary: ["Poppins", "sans-serif"],
    },
    extend: {
      
    },
  },
  plugins: [],
}
