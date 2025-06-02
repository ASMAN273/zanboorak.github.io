<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class desc extends Model
{
    protected $table='tbl_desc';
    protected $fillable=['id', 'desc_id','date_k','desc'];
}
