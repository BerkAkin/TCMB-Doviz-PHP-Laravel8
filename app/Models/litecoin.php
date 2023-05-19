<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class litecoin extends Model
{
    use HasFactory;
    protected $table='litecoins';
    protected $primaryKey = 'id';
}
