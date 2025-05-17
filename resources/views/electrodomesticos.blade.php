@extends('layouts/sidebar')

<!--Cuando la sidebar se desactive, quitar ml-64 del main div-->
@section('main')
    <div class="grid grid-cols-5 gap-20 w-fit mx-auto">
        @foreach ($electrodomesticos_images_list as $index => $producto)
            <div class="flex flex-col border border-purple-700 bg-white w-[250px]">
                <img src="{{ asset($producto['image']) }}" class="border-b">
                <p>{{$producto['nombre']}}</p>
            </div>
        @endforeach
    </div>
@endsection

