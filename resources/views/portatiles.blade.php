@extends('layouts/sidebar')

<!--Cuando la sidebar se desactive, quitar ml-64 del main div-->
@vite(['resources/js/switcher/switcherPortatil.js'])
@section('main')
    <div class="grid lg:grid-cols-5 grid-cols-1 gap-20 w-fit mx-auto text-white">
        @foreach ($portatiles_images_list as $index => $producto)
            <div class="flex flex-col bg-[#1E1E1E] w-[250px] cursor-pointer">
                <img src="{{ asset($producto['image']) }}" class="border-b">
                <p class="text-center bg-[#1E1E1E]">{{$producto['nombre']}}</p>
            </div>
        @endforeach
    </div>
@endsection
