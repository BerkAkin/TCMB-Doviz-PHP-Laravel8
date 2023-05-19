<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitcoin extends Model
{
    use HasFactory;
    protected $table='bitcoins';
    protected $primaryKey = 'id';
}
