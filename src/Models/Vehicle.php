<?php

namespace Vehicles\Models;

use BW\Traits\MagicMethodTrait;
use Illuminate\Database\Eloquent\Model;
use BW\Util\Relationships\RelationshipTrait;
use BW\Util\Form\Itens\Fields\TextAreaEditorTrait;

class Vehicle extends Model
{
    // Trait
    use MagicMethodTrait, RelationshipTrait, TextAreaEditorTrait;

    protected static $textarea = ['comments'];

    //
    protected $table = 'vehicles';

    //
    protected $fillable = [];
}
