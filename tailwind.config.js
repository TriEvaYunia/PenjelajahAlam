/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.FACE1",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        softGreen: '#A7F3D0', // Hijau lembut
        softBrown: '#D8B4A0', // Cokelat lembut
        softBlue: '#A3BFFA', // Biru pastel
        softCream: '#F5F5F5', // Krem lembut
        darkGreen: '#2D6A4F', // Hijau tua untuk aksen
      },
      fontFamily: {
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
};