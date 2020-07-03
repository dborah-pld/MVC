<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Licorne;
use App\User;


class Seller_sheet extends Model
{
    protected $table = "seller_sheet";

    protected $fillable = [
        "id", "unicorn_id", "seller_id", "references", "price", "sell_place"
    ];

    public function licorne()
    {
        return $this->belongsTo(Licorne::class, 'unicorn_id');
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
