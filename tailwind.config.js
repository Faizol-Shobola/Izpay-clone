/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    colors: {
      'white': '#FFFFFF',
      'gray': '#D4D4D4',
      'dark': '#151518',
      'purple': '#8176FF',
      'dark-purple': '#6B5EFF',
      'deep-purple': '#221f41'
    },
    extend: {
      fontFamily: {
        head: ['Montserrat', 'sans-serif'],
        body: ['Work Sans', 'sans-erif'],
      },
    },
  },
  plugins: [],
}
