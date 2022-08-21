/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'white': '#FFFFFF',
        'gray': '#D4D4D4',
        'dark': '#151518',
        'purple': '#8176FF',
        'dark-purple': '#6B5EFF'
      },

      fontFamily: {
        head: ['Montserrat', 'sans-serif'],
        body: ['Work Sans', 'sans-erif'],
      },

      backgroundImage: {
        'section-four': "url('https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2021/01/shopping-girl-home1@2x.jpg')"
       }
    },
  },
  plugins: [],
}
