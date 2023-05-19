<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tether extends Model
{
    use HasFactory;
    protected $table='tethers';
    protected $primaryKey = 'id';
}
