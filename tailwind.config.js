/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    colors: {
      'white': '#FFFFFF',
      'dark': '#151518',
      'purple': '#8176FF',
      'dark-purple': '#6B5EFF'
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
