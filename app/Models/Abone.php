<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abone extends Model
{
    use HasFactory;
    protected $table='abones';
    protected $primaryKey = 'id';
}
