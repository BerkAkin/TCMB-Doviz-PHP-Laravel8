<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sterlin extends Model
{
    use HasFactory;
    protected $table='sterlins';
    protected $primaryKey = 'id';
}
