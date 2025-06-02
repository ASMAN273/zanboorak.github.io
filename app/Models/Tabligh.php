<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabligh extends Model
{
    protected $table='tabligh';
    protected $fillable=['id','position', 'description', 'picture'];
}
