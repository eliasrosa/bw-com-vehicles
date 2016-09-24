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
    ]
];
