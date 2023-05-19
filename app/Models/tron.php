<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tron extends Model
{
    use HasFactory;
    protected $table='trons';
    protected $primaryKey = 'id';
}
