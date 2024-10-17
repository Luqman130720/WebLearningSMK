/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
     "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      // backgroundSize: {
      //   'custom-small': '325px',  // Sesuaikan ukuran yang Anda inginkan
      // },
      backgroundImage: {
        'subtle-pattern': "url('/public/assets/img/bg-body.png')",
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
     require('flowbite-typography'),
  ],
}

