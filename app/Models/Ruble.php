<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruble extends Model
{
    use HasFactory;
    protected $table='rubles';
    protected $primaryKey = 'id';
}
