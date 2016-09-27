<?php

namespace Veiculos\Models;

use BW\Util\Relationships\Traits\RelationshipTrait;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    // Trait
    use RelationshipTrait;

    //
    protected $table = 'veiculos';

    //
    protected $fillable = array('nome', 'status');
}
