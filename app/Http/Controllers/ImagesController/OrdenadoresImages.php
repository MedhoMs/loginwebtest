<?php

namespace App\Http\Controllers\ImagesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdenadoresImages extends Controller
{
    public function ordenador()
    {
        $ordenadores_images_list = [
            [
            'image' => 'img/ordenadores/Ordenador Sobremesa DELL 0TWFC.webp',
            'nombre' => 'Ordenador Sobremesa DELL 0TWFC',
            'precio' => ''
            ],

            [
            'image' => 'img/ordenadores/Ordenador Sobremesa Differo OR1639249PN.webp',
            'nombre' => 'Ordenador Sobremesa Differo OR1639249PN',
            'precio' => ''
            ],

            [
            'image' => 'img/ordenadores/Ordenador Sobremesa Differo OR1639279.webp',
            'nombre' => 'Ordenador Sobremesa Differo OR1639279',
            'precio' => ''
            ],

            [
            'image' => 'img/ordenadores/Ordenador de sobremesa Differo OR1639248PN.webp',
            'nombre' => 'Ordenador de sobremesa Differo OR1639248PN',
            'precio' => ''
            ],

            [
            'image' => 'img/ordenadores/Ordenador de sobremesa Differo OR1639250PN.webp',
            'nombre' => 'Ordenador de sobremesa Differo OR1639250PN',
            'precio' => ''
            ],

            [
            'image' => 'img/ordenadores/Ordenador de sobremesa Differo OR1639278PN.webp',
            'nombre' => 'Ordenador de sobremesa Differo OR1639278PN',
            'precio' => ''
            ],

            [
            'image' => 'img/ordenadores/Ordenador Sobremesa Differo OR1639249PN.webp',
            'nombre' => 'Ordenador Sobremesa Differo OR1639249PN',
            'precio' => ''
            ],

            [
            'image' => 'img/ordenadores/Ordenador de sobremesa Differo OR1639248PN.webp',
            'nombre' => 'Ordenador de sobremesa Differo OR1639248PN',
            'precio' => ''
            ],
            [
            'image' => 'img/ordenadores/Ordenador Sobremesa DELL 0TWFC.webp',
            'nombre' => 'Ordenador Sobremesa DELL 0TWFC',
            'precio' => ''
            ],
            [
            'image' => 'img/ordenadores/Ordenador Sobremesa Lenovo 90VH00DTES.webp',
            'nombre' => 'Ordenador Sobremesa Lenovo 90VH00DTES',
            'precio' => ''
            ],
        ];

        return view('ordenadores', compact('ordenadores_images_list'));
    }
}
