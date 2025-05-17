<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectrodomesticosImages extends Controller
{
    public function electrodomestico()
    {
        $electrodomesticos_images_list = [
            [
            'image' => 'img/electrodomesticos/Frigorífico combi Bosch KGN36VLED.webp',
            'nombre' => 'Frigorífico combi Bosch KGN36VLED',
            'precio' => ''
            ],

            [
            'image' => 'img/electrodomesticos/Frigorífico combi Samsung RB38C776DS9-EF.webp',
            'nombre' => 'Frigorífico combi Samsung RB38C776DS9-EF',
            'precio' => ''
            ],

            [
            'image' => 'img/electrodomesticos/Lavadora carga frontal Balay 3TS285BS.webp',
            'nombre' => 'Lavadora carga frontal Balay 3TS285BS',
            'precio' => ''
            ],

            [
            'image' => 'img/electrodomesticos/Lavadora carga frontal Bosch WUU28T61ES.webp',
            'nombre' => 'Lavadora carga frontal Bosch WUU28T61ES',
            'precio' => ''
            ],

            [
            'image' => 'img/electrodomesticos/Lavavajillas AEG FFB74927ZM.webp',
            'nombre' => 'Lavavajillas AEG FFB74927ZM',
            'precio' => ''
            ],

            [
            'image' => 'img/electrodomesticos/Lavavajillas Beko BDFN05330X.webp',
            'nombre' => 'Lavavajillas Beko BDFN05330X',
            'precio' => ''
            ],

            [
            'image' => 'img/electrodomesticos/Microondas LG MH6535GDH.webp',
            'nombre' => 'Microondas LG MH6535GDH',
            'precio' => ''
            ],

            [
            'image' => 'img/electrodomesticos/Microondas Teka MWE 230 G.webp',
            'nombre' => 'Microondas Teka MWE 230 G',
            'precio' => ''
            ],
            [
            'image' => 'img/electrodomesticos/Placa de inducción Teka MestrePaeller IZC 63632 MPT BK.webp',
            'nombre' => 'Placa de inducción Teka MestrePaeller IZC 63632 MPT BK',
            'precio' => ''
            ],
            [
            'image' => 'img/electrodomesticos/Placa vitrocerámica Balay 3EB715LR.webp',
            'nombre' => 'Placa vitrocerámica Balay 3EB715LR',
            'precio' => ''
            ],
        ];

        return view('electrodomesticos', compact('electrodomesticos_images_list'));
    }
}
