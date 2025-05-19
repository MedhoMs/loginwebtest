@extends('layouts/login_nav')

@section('content')
@vite(['resources/css/app.css', 'resources/js/switcher/switcherCreate.js'])
<main class="flex flex-col justify-center items-center pt-[9%] text-white font-coolvetica">
    <div class="p-12 rounded-xl shadow-[-7px_7px_7px_0px_rgba(0,_0,_0,_0.1)] bg-gray-200/40">
        <form method="POST" action="/register" id="loginForm">
            @csrf

            <!--Este div engloba la creacion de la cuenta, luego se volverá hidden, para mostrar la seleccion de nombre de usuario-->
            <div id="create_process" class="flex flex-col">
                <h1 id="title" class="text-3xl text-center pb-4"></h1>

                <label for="email" id="form_email" class="py-2 text-xl"></label>
                <input type="email" name="email" required class="border-2 border-transparent bg-white text-black bg-opacity-30 rounded-md p-1 focus:outline-none">

                <label for="password" id="form_password" class="py-2 text-xl"></label>
                <input type="password" name="password" required class="border-2 border-transparent bg-white text-black bg-opacity-20 rounded-md p-1 focus:outline-none">

                <div class="text-gray-300 text-sm pt-5">
                    <button id="next_button" type="button" class="cursor-pointer w-full bg-[#3C3C3C] text-lg shadow-[-7px_7px_7px_0px_rgba(0,_0,_0,_0.1)] rounded-xl p-1 transition-colors duration-300 hover:text-gray-800">
                        <span id="continue"></span>
                    </button>
                </div>

                <!--Este div devuelve un mensaje de error si se introduce un email o usuario ya existente, el codigo esta declarado en UserController-->
                <div>
                    @if ($errors->has('duplicate'))
                        <p class="text-red-600 text-sm mt-4 px-2 py-1 rounded-lg bg-[#4D4D4D] text-center">{{ $errors->first('duplicate') }}</p>
                    @endif
                </div>
            </div>

            <!--Este div engloba la seleccion de nombre de usuario, se volverá visible despues de pulsar el boton de continuar en el div de crear-->
            <div id="set_username" class="flex flex-col hidden">

                <h1 id="second_title" class="text-3xl text-center pb-4"></h1>

                <label for="name" id="second_form_username" class="py-2 text-xl"></label>
                <input type="text" name="username" required class="border-2 border-transparent bg-white text-black bg-opacity-30 rounded-md p-1 focus:outline-none">

                <div class="text-gray-300 text-sm pt-5">
                    <button type="submit" class="cursor-pointer w-full bg-[#3C3C3C] text-lg shadow-[-7px_7px_7px_0px_rgba(0,_0,_0,_0.1)] rounded-xl p-1 transition-colors duration-300 hover:text-gray-800">
                        <span id="submit"></span>
                    </button>
                </div>
            </div>

            <div class="text-gray-300 text-sm text-right pt-5">
                <a href="/authentication/sign_in">
                    <span id="opposite_option" class="transition-colors duration-300 hover:text-gray-800 underline"></span> ->
                </a>
            </div>
        </form>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const nextButton = document.getElementById("next_button");
        const createProcess = document.getElementById("create_process");
        const setUsername = document.getElementById("set_username");

        nextButton.addEventListener("click", function () {
            createProcess.classList.add("hidden");
            setUsername.classList.remove("hidden");
        })
    })
    </script>
</main>
<!--<p id="errorMessage" class="text-red-600 text-center py-2 hidden">Por favor, completa todos los campos.</p>-->
@endsection
