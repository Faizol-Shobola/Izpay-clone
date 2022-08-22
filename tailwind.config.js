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
        'hero': "url('https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2021/01/hjalftone-header-1@2x.png')",
        'section-four': "url('https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2021/01/shopping-girl-home1@2x.jpg')",
        'section-five': "url('https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2020/12/bg-halftone@2x.png')",
        'section-six': "url('https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2021/01/testi-bg@2x.png')",
        'section-seven': "url('https://templatekit.jegtheme.com/izpay/wp-content/uploads/sites/30/2021/01/payment-img@2x.jpg')",
       }
    },
  },
  plugins: [],
}
