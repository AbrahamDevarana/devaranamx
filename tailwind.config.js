const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
      extend: {
          fontFamily: {
              sans: ['Nunito', ...defaultTheme.fontFamily.sans],
              mulish: ['Mulish', 'sans-serif'],
              playfair: ['Playfair Display', 'sans-serif'],

          },
          colors: {
              'devarana-blue' : '#56739b',
              'devarana-babyblue' : '#a9c0e4',
              'devarana-pink' : '#d64767',
              'devarana-midnight' : '#242a38',
              'devarana-hazelnut' : '#eadfd4',
              'devarana-pearl' : '#f9f9f7',
              'devarana-graph' : '#656a76',
              'devarana-pollito' : '#ffdea4',
              'devarana-salmon' : '#fabcab',
              'light-blue' : '#E0E3EC'
          },
          transitionProperty: {
              'height': 'height',
              'backgroundImage':'backgroundImage'
          },
          fontSize: {
              base: ['16px', '24px'],
          },
          backgroundImage:{
              'quienes-somos' : "url('/img/quienes-somos/Quienesomos.png')",
              'contacto' : "url('/img/contacto/DEV-Textura-opacidad.png')",
              'nuestro-equipo' : "url('/img/nuestro-equipo/Nuestro_equipo.png')",
              'trayectoria' : "url('/img/trayectoria/royalview.png')",
              'home-banner' : "url('/img/home/Somos-orgullosamente.jpg')",
              'oficinas-devarana-1' : "url('/img/quienes-somos/OFICINAS-DEVARANA-1.jpg')",
              'oficinas-devarana-2' : "url('/img/quienes-somos/OFICINAS-DEVARANA-2.jpg')",
              'oficinas-devarana-3' : "url('/img/quienes-somos/OFICINAS-DEVARANA-3.jpg')",
              'oficinas-devarana-4' : "url('/img/quienes-somos/OFICINAS-DEVARANA-4.jpg')",
              'oficinas-devarana-5' : "url('/img/quienes-somos/OFICINAS-DEVARANA-5.jpg')",
              'oficinas-devarana-6' : "url('/img/quienes-somos/OFICINAS-DEVARANA-6.jpg')",
              'oficinas-devarana-7' : "url('/img/quienes-somos/OFICINAS-DEVARANA-7.jpg')",

          },
          rotate: {
              '270': '270deg',
          },

      },
  },

    plugins: [require('@tailwindcss/forms')],
};
