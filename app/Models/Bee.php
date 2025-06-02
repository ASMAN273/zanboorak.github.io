<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bee extends Model
{
   protected $table='tbl_kandoo';
   protected $fillable=['id','id_user','id_beehive', 'id_mother', 'cloni_type', 'box_number', 'age_queen', 'qeen_race',
    'shakhoon', 'picture', 'bimari', 'date_bazdid', 'description'];


}
