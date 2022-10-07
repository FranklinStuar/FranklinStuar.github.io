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
      colors:{
        primary: "#0F103F",
        secondary: "#1C1C65",
        dark: "#0f0f0f",
        light: "#dfdfdf",
        "blue-dark": "#2F2F8A",
        "blue-light": "#2954A3",
        "blue-green": "#0bfcdd",
        "blue-skills": "rgba(11, 252, 221,.5)",
      }
    },
  },
  plugins: [],
}
