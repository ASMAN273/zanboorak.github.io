<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainpage extends Model
{
    protected $table='mainpage';
    protected $fillable=['id','picture','subject', 'mainpage', 'groups_id','rols'];

    public static function paginate(int $int)
    {
    }
}
