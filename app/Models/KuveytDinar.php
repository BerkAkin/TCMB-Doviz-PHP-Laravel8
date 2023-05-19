<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuveytDinar extends Model
{
    use HasFactory;
    protected $table='kuveytdinars';
    protected $primaryKey = 'id';
}
