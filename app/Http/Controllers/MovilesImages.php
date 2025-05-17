<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovilesImages extends Controller
{
    public function movil()
    {
        $moviles_images_list = [
            [
            'image' => 'img/moviles/Samsung Galaxy A05S 4GB128GB NEGRO.webp',
            'nombre' => 'Samsung Galaxy A05S 4GB128GB NEGRO',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Libre SPC Fortune 2 4GB Negro.webp',
            'nombre' => 'Teléfono Libre SPC Fortune 2 4GB Negro',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung A16 4GB128GB Black.webp',
            'nombre' => 'Teléfono Samsung A16 4GB128GB Black',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung Galaxy A26 SM-A266BZKBEUB.webp',
            'nombre' => 'Teléfono Samsung Galaxy A26 SM-A266BZKBEUB',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung Galaxy A36 SM-A366BLVBEUB.webp',
            'nombre' => 'Teléfono Samsung Galaxy A36 SM-A366BLVBEUB',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung Galaxy A36 SM-A366BZABEUB.webp',
            'nombre' => 'Teléfono Samsung Galaxy A36 SM-A366BZABEUB',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung Galaxy A56 SM-A566BZAAEUB.webp',
            'nombre' => 'Teléfono Samsung Galaxy A56 SM-A566BZAAEUB',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung Galaxy A56 SM-A566BZGAEUB.webp',
            'nombre' => 'Teléfono Samsung Galaxy A56 SM-A566BZGAEUB',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung GALAXY S24 8GB256GB ONYX BLACK.webp',
            'nombre' => 'Teléfono Samsung GALAXY S24 8GB256GB ONYX BLACK',
            'precio' => ''
            ],

            [
            'image' => 'img/moviles/Teléfono Samsung GALAXY S25 12GB256GB NAVY.webp',
            'nombre' => 'Teléfono Samsung GALAXY S25 12GB256GB NAVY',
            'precio' => ''
            ],
        ];

        return view('moviles', compact('moviles_images_list'));
    }
}
