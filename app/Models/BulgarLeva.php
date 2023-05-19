<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulgarLeva extends Model
{
    use HasFactory;
    protected $table='bulgarlevas';
    protected $primaryKey = 'id';
}
