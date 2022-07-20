/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,js}",
  './public/**/*.html',
  './public/**/*.js'
  ],
  mode: 'jit',
  theme: {
    extend: {},
  },
  plugins: [],
}
