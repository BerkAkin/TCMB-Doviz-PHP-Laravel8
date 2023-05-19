<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gelenkutu extends Model
{
    use HasFactory;
    protected $table='gelenkutus';
    protected $primaryKey = 'id';
}
