<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NorvecKron extends Model
{
    use HasFactory;
    protected $table='norveckrons';
    protected $primaryKey = 'id';
}
