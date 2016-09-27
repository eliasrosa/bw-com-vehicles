<?php

return [

    //
    'magic-relationship' => [

        'Veiculos\Models\Veiculo' => [
            'imagem' => ['type' => 'Image'],
            'galeria' => ['type' => 'ImageGroup'],
            'marcadores' => ['type' => 'Tag'],

            //
            'categoria' => [ 'type' => 'Listing', 'relationships' => [
                'imagem' => ['type' => 'Image'],
            ]],
        ],
    ],

    //
    'menu' => [
        [
            'label' => 'Gerenciar veículos',
            'icon' => 'fa fa-car',
            'route-index' => 'bw.veiculos.index',
            'route' => 'bw.veiculos.index',
        ],
    ]
];
