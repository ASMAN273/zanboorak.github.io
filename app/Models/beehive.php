<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beehive extends Model
{
    use HasFactory;

    protected $table='beehive';
    protected $fillable=['id','user_id' ,'beehive_name', 'beehive_location', 'beehive_licence'];



}
