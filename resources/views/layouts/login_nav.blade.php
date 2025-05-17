<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title id="window_title"></title>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
    <!--bg-[#7ABFFF]-->
    <!--Quitar absolute y el h-screen, y poner pt al form-->
    <body class="bg-[#7ABFFF]">

        <div class="w-full flex justify-between gap-4 p-3 font-coolvetica bg-[#B3F0FF] shadow-[-1px_7px_5px_0px_rgba(0,_0,_0,_0.1)]">

            <div class="w-[160px]"></div>

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

        <svg class="absolute bottom-0 left-0 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1" d="M0,64L40,85.3C80,107,160,149,240,165.3C320,181,400,171,480,181.3C560,192,640,224,720,213.3C800,203,880,149,960,154.7C1040,160,1120,224,1200,234.7C1280,245,1360,203,1400,181.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </body>
</html>

