<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MixHubImages extends Controller
{
    public function mostrarProductos()
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

    // Combina las listas
    $productosCombinados = array_merge($portatiles_images_list, $ordenadores_images_list, $moviles_images_list, $electrodomesticos_images_list);

    // Mezcla aleatoriamente
    shuffle($productosCombinados);

    // Opcional: solo los primeros N elementos (por ejemplo 10)
    $productosSeleccionados = array_slice($productosCombinados, 0, 10);

    return view('hub', ['productos' => $productosSeleccionados]);
}

}
