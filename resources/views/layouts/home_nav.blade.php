<!DOCTYPE html>
<html lang="es" class="">
<head>
    <meta charset="UTF-8">
    <title id="window_title"></title>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>@yield('title', 'Mi App Laravel')</title>
    @vite(['resources/js/sidebarView.js'])
</head>
    <body class="bg-[#3C3C3C] scroll-smooth text-white">

        <div class="w-full sticky top-0 flex justify-between gap-4 p-3 font-coolvetica bg-[#4D4D4D] shadow-[-1px_7px_5px_0px_rgba(0,_0,_0,_0.1)]">

            <div class="lg:w-[160px] w-[360px] self-center pl-2.5">
                <svg xmlns="http://www.w3.org/2000/svg" id="toggleSidebar" class="w-[25%] cursor-pointer icon icon-tabler icons-tabler-outline icon-tabler-menu-2" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
            </div>

            <h1 id="nav_title" class="text-4xl self-center font-bold text-center grow"></h1>

            <div class="flex gap-4">
                <div id="spanish_flag" class="group flex flex-col items-center transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                    <img src="{{ asset('img/flags/spanish_flag.webp') }}" alt="Spanish" class="w-18 h-11 object-cover">
                    <p id="spanish_selector" class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xl"></p>
                </div>

                <div id="english_flag" class="group flex flex-col items-center transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                    <img src="{{ asset('img/flags/uk_flag.webp') }}" alt="Spanish" class="w-18 h-11 object-cover">
                    <p id="english_selector" class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xl"></p>
                </div>
            </div>
        </div>

        @yield('content')

    </body>
</html>
