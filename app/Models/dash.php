<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dash extends Model
{
    use HasFactory;
    protected $table='dashs';
    protected $primaryKey = 'id';
}
