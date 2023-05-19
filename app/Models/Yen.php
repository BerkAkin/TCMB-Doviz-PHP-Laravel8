<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yen extends Model
{
    use HasFactory;
    protected $table='yens';
    protected $primaryKey = 'id';
}
