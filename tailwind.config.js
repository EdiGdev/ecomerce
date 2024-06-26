
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
      extend: {fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
    },},
    },
    plugins: [
        require('flowbite/plugin')
        
    ],
  }