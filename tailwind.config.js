/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: { spacing: {
      '128': '32rem',
    }},
  },
  plugins: [],
}