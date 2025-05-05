<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    @vite(['resources/css/app.css', 'resources/js/signInSwitcher.js'])
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

        <main class="flex flex-col justify-center items-center h-screen text-black font-coolvetica">
            <div class="p-12 rounded-xl shadow-[-7px_7px_7px_0px_rgba(0,_0,_0,_0.1)] bg-gray-200/40">
                <form method="POST" action="/login" class="flex flex-col">
                    @csrf
                    <h1 id="title" class="text-3xl text-center pb-4"></h1>

                    <label for="name" id="form_name" class="py-2 text-xl"></label>
                    <input type="text" name="name" required class="border-2 border-transparent bg-white bg-opacity-30 rounded-md p-1 focus:outline-none">

                    <label for="password" id="form_password" class="py-2 text-xl"></label>
                    <input type="password" name="password" required class="border-2 border-transparent bg-white bg-opacity-20 rounded-md p-1 focus:outline-none">

                    <div class="text-gray-500 text-sm pt-5">
                        <button type="submit" class="w-full text-lg bg-gradient-to-tr from-yellow-400 to-red-500 shadow-[-7px_7px_7px_0px_rgba(0,_0,_0,_0.1)] rounded-xl p-1 transition-colors duration-300 hover:text-gray-800">
                            <span id="submit"></span>
                        </button>
                    </div>

                    <div class="text-gray-500 text-sm text-right pt-5">
                        <a href="/">
                            <span id="opposite_option" class="transition-colors duration-300 hover:text-gray-800 underline"></span> ->
                        </a>
                    </div>
                    @if ($errors->has('login'))
                        <div class="text-red-600 text-center pt-2">
                            {{ $errors->first('login') }}
                        </div>
                    @endif
                </form>
            </div>
        </main>
    </body>
</html>
