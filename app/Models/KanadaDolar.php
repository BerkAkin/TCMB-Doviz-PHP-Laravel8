<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanadaDolar extends Model
{
    use HasFactory;
    protected $table='kanadadolars';
    protected $primaryKey = 'id';
}
