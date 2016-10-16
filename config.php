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

                'galery' => [
                    'type' => 'ImageGroup',
                    'title' => 'Galeria de imagens',
                    'panel' => 'Galeria de imagens',
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

                'status' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Status',
                ],

                'options' => [
                    'type' => 'Tag',
                    'panel' => 'Mais informações',
                    'title' => 'Opcionais',
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
