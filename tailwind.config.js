/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      maxWidth: {
        '1200': '1200px',
      },
      fontSize: {
        '20px': '1.25rem', // 20px = 1.25rem
      },
    },
  },
  plugins: [
    require('postcss-import'),
    require('postcss-simple-vars'),
    require('tailwindcss'),
    require('autoprefixer'),
  ],
}