<?php

return [

    //
    'magic-relationship' => [

        //
        'Vehicles\Models\Vehicle' => [

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
                'validator' => 'required|not_in:0',
                'title' => 'Marca',
            ],

            'color' => [
                'type' => 'Listing',
                'panel' => 'Mais informações',
                'validator' => 'required|not_in:0',
                'title' => 'Cor',
            ],

            'fuel' => [
                'type' => 'Listing',
                'panel' => 'Mais informações',
                'validator' => 'required|not_in:0',
                'title' => 'Combustível',
            ],

            'status' => [
                'type' => 'Listing',
                'panel' => 'Mais informações',
                'validator' => 'required|not_in:0',
                'title' => 'Status',
            ],

            'options' => [
                'type' => 'Tag',
                'panel' => 'Mais informações',
                'title' => 'Opcionais',
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
