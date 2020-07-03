<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Licorne;

class Licorne extends Model
{
    protected $table = "unicorns";

    protected $fillable = [
        "id", "name", "tourniquet", "birth_date", "birth_place", "mane_color", "sex"
    ];
}
