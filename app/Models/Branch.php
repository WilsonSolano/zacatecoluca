<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'marcas';
    protected $primaryKey = 'codigo';
    protected $fillable = ['nombre'];
}