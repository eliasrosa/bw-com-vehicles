<?php

return [

    //
    'models' => [

        //
        'Vehicles\Models\Vehicle' => [
            'route-index' => 'bw.vehicles.index',
            'title' => 'Veículos',

            'relationships' => [

                'image' => [
                    'type' => 'Image',
                    'panel' => 'Imagens',
                    'title' => 'Imagem',
                ],

                'brand' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Marca',
                ],

                'color' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Cor',
                ],

                'fuel' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Combustível',
                ],

                'transmission' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Câmbio',
                ],

                'status' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Status',
                ],
            ],
        ],
    ],

    //
    'menu' => [
        [
            'label' => 'Gerenciar veículos',
            'icon' => 'fa fa-car',
            'route-index' => 'bw.vehicles.index',
            'route' => 'bw.vehicles.index',
        ],
    ]
];
