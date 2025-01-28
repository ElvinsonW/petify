import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', 
    theme: {
        extend: {
          colors:{
            'greenpetify': '#166B68',
            'greentua': '#124C59',
            'greenhover': '#1C8985',
            'greentipis': '#588C7E',
            'greenabout': '#D1D9C1',
            'greencat': '#C1E180',
            'oren': '#D96459',
            'orenmuda': '#F2AE72',
            'merah': '#CC2E1F',
            'kuning': '#F2D785',
            'kuninggelap': '#E8C559',
            'bluereptile': '#96BDF8'
          },
    
          fontFamily:{
            overpass:['Overpass'],
            montserrat_alt:['Montserrat Alternates'],
            open_sans: ['Open Sans']
          },
    
          gap:{
            '13' : '54px'
          },
    
          letterSpacing:{
            'wide-9' :'9%'
          },
    
          spacing:{
            '13a':'13px',
            '4rem': '0.4rem'
          },
    
          borderRadius: {
            '4xl': '3rem', 
          },
    
          borderWidth: {
            '1/2': '1px'
          },
        },
      },
      safelist: [
        'bg-greenpetify',
        'bg-greentua',
        'bg-greenhover',
        'bg-greentipis',
        'bg-greenabout',
        'bg-greencat',
        'bg-oren',
        'bg-orenmuda',
        'bg-merah',
        'bg-kuning',
        'bg-kuninggelap',
        'bg-bluereptile',
        'text-greenpetify',
        'text-greentua',
        'text-greenhover',
        'text-greentipis',
        'text-greenabout',
        'text-greencat',
        'text-oren',
        'text-orenmuda',
        'text-merah',
        'text-kuning',
        'text-kuninggelap',
        'text-bluereptile',
        'border-greenpetify',
        'border-greentua',
        'border-greenhover',
        'border-greentipis',
        'border-greenabout',
        'border-greencat',
        'border-oren',
        'border-orenmuda',
        'border-merah',
        'border-kuning',
        'border-kuninggelap',
        'border-bluereptile',
        'hover:bg-greenpetify',
        'hover:bg-greentua',
        'hover:bg-greenhover',
        'hover:bg-greentipis',
        'hover:bg-greenabout',
        'hover:bg-greencat',
        'hover:bg-oren',
        'hover:bg-orenmuda',
        'hover:bg-merah',
        'hover:bg-kuning',
        'hover:bg-kuninggelap',
        'hover:bg-bluereptile',
        ],
    plugins: []
};
