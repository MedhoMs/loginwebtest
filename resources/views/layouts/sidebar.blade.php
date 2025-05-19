@extends('layouts/home_nav')

@section('content')
@vite(['resources/css/app.css', 'resources/js/switcher/switcherSidebar.js'])

<!--Div que abarca la sidebar y el contenido-->
<div class="flex">

    <!--Div que abarca la vista de la sidebar con los links y redes/contactos-->
    <div id="sidebar" class="flex flex-col justify-between opacity-0 -translate-x-full transition-all duration-300 transform fixed h-screen w-44 lg:w-64 bg-[#4D4D4D] lg:text-xl text-sm">

    <!--Div que abarca los likns de la sidebar-->
        <nav class="flex flex-col pl-8"><!--overflow-y-auto-->
            <a href="" class="flex mt-5 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center fixed opacity-0 -rotate-180 transform transition-all duration-300 group-hover:opacity-100 group-hover:rotate-0" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                <span class="transition-transform duration-300 group-hover:translate-x-6 ease-in-out" id="perfil"></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center transition-transform duration-300 group-hover:translate-x-6 ml-1" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
            </a>
            <a href="/" class="flex group">
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center fixed opacity-0 -rotate-180 transform transition-all duration-300 group-hover:opacity-100 group-hover:rotate-0" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                <span class="transition-transform duration-300 group-hover:translate-x-6 ease-in-out" id="inicio"></span>
            </a>
            <a href="/ordenadores" class="flex group">
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center fixed opacity-0 -rotate-180 transform transition-all duration-300 group-hover:opacity-100 group-hover:rotate-0" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                <span class="transition-transform duration-300 group-hover:translate-x-6 ease-in-out" id="ordenadores"></span>
            </a>
            <a href="/portatiles" class="flex group">
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center fixed opacity-0 -rotate-180 transform transition-all duration-300 group-hover:opacity-100 group-hover:rotate-0" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                <span class="transition-transform duration-300 group-hover:translate-x-6 ease-in-out" id="portatiles"></span>
            </a>
            <a href="/moviles" class="flex group">
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center fixed opacity-0 -rotate-180 transform transition-all duration-300 group-hover:opacity-100 group-hover:rotate-0" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                <span class="transition-transform duration-300 group-hover:translate-x-6 ease-in-out" id="moviles"></span>
            </a>
            <a href="/electrodomesticos" class="flex group">
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center fixed opacity-0 -rotate-180 transform transition-all duration-300 group-hover:opacity-100 group-hover:rotate-0" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                <span class="transition-transform duration-300 group-hover:translate-x-6 ease-in-out" id="electrodomesticos"></span>
            </a>
            <a href="/authentication/sign_in" class="flex group transition-colors duration-100 hover:text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center fixed opacity-0 -rotate-180 transform transition-all duration-300 group-hover:opacity-100 group-hover:rotate-0" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/></svg>
                <span class="transition-transform duration-300 group-hover:translate-x-6" id="cerrar"></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="self-center transition-transform duration-300 group-hover:translate-x-6" height="20px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
            </a>
        </nav>

        <div class="mb-30">

            <div class="pb-4">
                <p class="text-center pb-2">------------Redes-------------</p>
                <div class="flex justify-center gap-2">
                    <!--Animación declarada en 'resources/css/app.css' (transition-transform duration-300 hover:wiggle)-->
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="cursor:pointer transition-transform duration-300 hover:wiggle icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="cursor:pointer transition-transform duration-300 hover:wiggle icon icon-tabler icons-tabler-outline icon-tabler-brand-twitter" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" /></svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="cursor:pointer transition-transform duration-300 hover:wiggle icon icon-tabler icons-tabler-outline icon-tabler-brand-github" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg></a>
                </div>
            </div>

            <div>
                <p class="text-center pb-2">---------Contáctanos---------</p>
                <div class="flex justify-center gap-2">
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="cursor:pointer transition-transform duration-300 hover:wiggle icon icon-tabler icons-tabler-outline icon-tabler-mail" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg></a>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="cursor:pointer transition-transform duration-300 hover:wiggle icon icon-tabler icons-tabler-outline icon-tabler-phone" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg></a>
                </div>
            </div>

        </div>

    </div>

    <!--Cuando la sidebar se desactive, quitar ml-64 del main div-->
    <main id="mainContent" class="flex-grow p-5">
        @yield('main')
    </main>
</div>
@endsection
