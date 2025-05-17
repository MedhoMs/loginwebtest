@extends('layouts/login_nav')

@section('content')
@vite(['resources/css/app.css', 'resources/js/signInSwitcher.js'])
<main class="flex flex-col justify-center items-center pt-[11%] text-black font-coolvetica">
    <div class="p-12 rounded-xl shadow-[-7px_7px_7px_0px_rgba(0,_0,_0,_0.1)] bg-gray-200/40">
        <form method="POST" action="/login" class="flex flex-col">
            @csrf
            <h1 id="title" class="text-3xl text-center pb-4"></h1>

            <label for="name" id="form_name" class="py-2 text-xl"></label>
            <input type="text" name="name" required class="border-2 border-transparent bg-white bg-opacity-30 rounded-md p-1 focus:outline-none">

            <label for="password" id="form_password" class="py-2 text-xl"></label>
            <input type="password" name="password" required class="border-2 border-transparent bg-white bg-opacity-20 rounded-md p-1 focus:outline-none">

            <div class="text-gray-500 text-sm pt-5">
                <button type="submit" class="w-full text-lg shadow-[-7px_7px_7px_0px_rgba(0,_0,_0,_0.1)] rounded-xl p-1 transition-colors duration-300 hover:text-gray-800" style="background: linear-gradient(to bottom left, #7ABFFF, #97D8FF)">
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
@endsection
