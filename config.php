<?php

return [

    //
    'magic-relationship' => [

        'Automoveis\Models\Veiculo' => [
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
