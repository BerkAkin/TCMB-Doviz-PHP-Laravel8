<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yuan extends Model
{
    use HasFactory;
    protected $table='yuans';
    protected $primaryKey = 'id';
}
