<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Petify - NavBar Template</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
        
    <!-- Favicon Petify -->
    <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg">
    
    <!-- Font Overpass, Montserrat Alternates, & Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Katibeh&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rakkas&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Untuk Carousel Gambar -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        /* Override tombol navigasi */
        .swiper-button-prev::after, .swiper-button-next::after {
            display: none !important; 
        }

        /* Override pagination */
        .swiper-pagination-bullet {
            background-color: #588C7E !important; 
        }
        .swiper-pagination-bullet-active {
            background-color: #124C59 !important;
        }

        /* Tambahkan gaya untuk ikon terisi dengan efek fill */
        .filled-heart {
            color: #8a2828; /* Warna merah yang diinginkan */
            background: linear-gradient(transparent, #8a2828 60%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: #8a2828;
        }
    </style>

    <!-- Trix Editor -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
    

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none
        }
    </style>

    <!-- Livewire -->
    @livewireStyles
</head>
    <body>
        <x-navbar></x-navbar>
        {{ $slot }}
        <x-footer></x-footer>

        <script>
            const buttonToogle = document.querySelector('.buttonToogle');
            const mobileMenu = document.querySelector('.mobileMenu');
            
            buttonToogle.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
                    
                const icon = buttonToogle.querySelector('.icon');
                
                // Toggle antara hamburger dan X
                if (icon.classList.contains('icon-hamburger')) {
                    // ganti path
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
                    icon.classList.remove('icon-hamburger');
                    icon.classList.add('icon-close');
                    icon.style.transform = 'rotate(90deg)'; // rotation effect
                } else {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                    icon.classList.remove('icon-close');
                    icon.classList.add('icon-hamburger');
                    icon.style.transform = 'rotate(0deg)'; // Reset rotation
                }
            });

            // Menghilangkan fungsi upload file pada Trix Editor
            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            })
        </script>  
    </body>
<html>

