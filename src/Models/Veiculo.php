<?php

namespace Automoveis\Models;

use Magic\Traits\MagicRelationship;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    // Trait
    use MagicRelationship;

    //
    protected $table = 'auto_veiculos';

    //
    protected $fillable = array('nome', 'status');
}
