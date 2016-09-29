<?php

return [

    //
    'magic-relationship' => [

        //
        'Vehicles\Models\Vehicle' => [
            'image'   => [ 'type' => 'Image'     ],
            'galery'  => [ 'type' => 'ImageGroup'],
            'brand'   => [ 'type' => 'Listing'   ],
            'color'   => [ 'type' => 'Listing'   ],
            'fuel'    => [ 'type' => 'Listing'   ],
            'status'  => [ 'type' => 'Listing'   ],
            'options' => [ 'type' => 'Tag'       ],
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
