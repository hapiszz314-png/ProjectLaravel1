<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //kita masukan tabael yg digunakan
    protected $table = 'items';
    // kolom kolom yg diizinkan untuk disi lewt from
    protected $fillable = [
        'code',
        'item_name',
        'category',
        'stok',
        'condition',
        'room_location'
    ];
}
