<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        .home {
            font-family: 'Changa', sans-serif;
        }
        .bg-orange{
            background-color:#FF6B45 ;
        }
        .text-orange{
            color: #ED563B ;
        }
        .text-blue{
            color: #474FA0 ;
        }
        .bg-gray{
            background-color: #EEEFF1 ;
        }
    </style>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="/resources/css/swiper-bundle.min.css">

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

{{-- swiper --}}
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
{{-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    /> --}}
{{-- ////////// --}}
    <!-- Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Changa:wght@400;605;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@807&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@500&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}"> --}}

    @livewireStyles

    <!-- Scripts -->
    {{-- <script src="{{ mix('resources/js/app.js') }}" defer></script> --}}
</head>

<body id="home"  class="bg-white h-screen home " dir="rtl">
    <x-jet-banner />

    <div class=" w-full  ">
        <div class="">@livewire('components.navbar')</div>

        <!-- Page Content -->
        <main class=" lg:p-10 lg:mt-5 overflow-y-auto  rounded-lg bg-white ">

            <div>
                {{ $slot }}
            </div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    {{-- swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".popular__container", {
        //  loop: true,
        spaceBetween: 24,
        slidesPerView: 'auto',
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
      });
    </script>

    {{-- //////// --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js">
    </script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <x-livewire-alert::scripts /> --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
