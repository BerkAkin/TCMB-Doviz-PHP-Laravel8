<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cumhuriyet extends Model
{
    use HasFactory;
    protected $table='cumhuriyets';
    protected $primaryKey = 'id';
}
