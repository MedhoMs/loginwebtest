<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Create an Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/createSwitcher.js'])
</head>
    <body class="bg-gradient-to-tr from-yellow-400 to-red-500">

        <div class="fixed w-full flex justify-end gap-4 p-3 font-coolvetica">
            <div id="spanish_flag" class="group flex flex-col items-center transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                <img src="{{ asset('img/flags/spanish_flag.webp') }}" alt="Spanish" class="w-18 h-11 object-cover">
                <p id="spanish_selector" class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xl"></p>
            </div>

            <div id="english_flag" class="group flex flex-col items-center transition-transform duration-300 hover:-translate-y-1 cursor-pointer">
                <img src="{{ asset('img/flags/uk_flag.webp') }}" alt="Spanish" class="w-18 h-11 object-cover">
                <p id="english_selector" class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xl"></p>
            </div>
        </div>

        <main class="flex justify-center items-center h-screen text-black font-coolvetica">
            <h1>HAS ENTRADO A LA PAGINA PRINCIPAL</h1>
        </main>
    </body>
</html>
