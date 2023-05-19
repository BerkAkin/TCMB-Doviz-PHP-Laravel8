<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etherum extends Model
{
    use HasFactory;
    protected $table='etherums';
    protected $primaryKey = 'id';
}
