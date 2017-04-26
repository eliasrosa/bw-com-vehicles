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

                'gallery' => [
                    'type' => 'ImageGallery',
                    'panel' => 'Imagens',
                    'title' => 'Galeria de imagens',
                ],

                'make' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Marca',
                ],

                'color' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Cor',
                ],                

                'destaque' => [
                    'type' => 'Listing',
                    'panel' => 'Mais informações',
                    'title' => 'Destaque',
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

                'features' => [
                    'type' => 'Tag',
                    'panel' => 'Opcionais',
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
