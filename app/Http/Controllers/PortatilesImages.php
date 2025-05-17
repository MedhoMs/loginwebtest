<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortatilesImages extends Controller
{
    public function portatil()
    {
        $portatiles_images_list = [
            [
            'image' => 'img/portatiles/Portátil Asus F1504VA-NJ1712W.webp',
            'nombre' => 'Portátil Asus F1504VA-NJ1712W',
            'precio' => ''
            ],

            [
            'image' => 'img/portatiles/Portátil DELL INSPIRON 3530.webp',
            'nombre' => 'Portátil DELL INSPIRON 3530',
            'precio' => ''
            ],

            [
            'image' => 'img/portatiles/Portátil DELL INSPIRON 3535.webp',
            'nombre' => 'Portátil DELL INSPIRON 3535',
            'precio' => ''
            ],

            [
            'image' => 'img/portatiles/Portátil DELL RX3GD.webp',
            'nombre' => 'Portátil DELL RX3GD',
            'precio' => ''
            ],

            [
            'image' => 'img/portatiles/Portátil Gigabyte AORUS 16X.webp',
            'nombre' => 'Portátil Gigabyte AORUS 16X',
            'precio' => ''
            ],

            [
            'image' => 'img/portatiles/Portátil HP 9E8L2EA.webp',
            'nombre' => 'Portátil HP 9E8L2EA',
            'precio' => ''
            ],

            [
            'image' => 'img/portatiles/Portátil HP 15-FD0172NS.webp',
            'nombre' => 'Portátil HP 15-FD0172NS',
            'precio' => ''
            ],

            [
            'image' => 'img/portatiles/Portátil Lenovo 82YU00TNSP.webp',
            'nombre' => 'Portátil Lenovo 82YU00TNSP',
            'precio' => ''
            ],
            [
            'image' => 'img/portatiles/Portátil Lenovo 82YY001PSP.webp',
            'nombre' => 'Portátil Lenovo 82YY001PSP',
            'precio' => ''
            ],
            [
            'image' => 'img/portatiles/Portátil Lenovo 83A100GFSP.webp',
            'nombre' => 'Portátil Lenovo 83A100GFSP',
            'precio' => ''
            ],
        ];

        return view('portatiles', compact('portatiles_images_list'));
    }
}
