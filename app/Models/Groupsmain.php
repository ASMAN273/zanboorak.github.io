<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupsmain extends Model
{
    protected $table='groups_mainpage';
    protected $fillable=['id','groups'];

    public static function paginate(int $int)
    {
    }
}
