<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gumus extends Model
{
    use HasFactory;
    protected $table='gumuss';
    protected $primaryKey = 'id';
}
