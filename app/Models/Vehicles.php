<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = ["code", "licencse_plate", "brand", "model", "isactive"];
}
