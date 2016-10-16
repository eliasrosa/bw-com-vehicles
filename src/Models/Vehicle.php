<?php

namespace Vehicles\Models;

use BW\Util\Relationships\RelationshipTrait;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    // Trait
    use RelationshipTrait;

    //
    protected $table = 'vehicles';

    //
    protected $fillable = [];
}
