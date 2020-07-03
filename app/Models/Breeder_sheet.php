<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Licorne;
use App\User;

class Breeder_sheet extends Model
{
    protected $table = "breeder_sheet";

    protected $fillable = [
        "id", "unicorn_id", "breeder_id", "reproduction_date1", "reproduction_date2", "is_pregnant", "nb_childs"
    ];

    public function licorne()
    {
        return $this->belongsTo(Licorne::class, 'unicorn_id');
    }

    public function breeder()
    {
        return $this->belongsTo(User::class, 'breeder_id');
    }
}
