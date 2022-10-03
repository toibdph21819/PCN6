/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./site/**/*.{html,js,php}",
    "./site/*.{html,js,php}",
    "./admin/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0d6efd',
      }
    },
  },
  plugins: [],
}
