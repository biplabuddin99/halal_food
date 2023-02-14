<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="db_items";

    public function unit(){
        return $this->belongsTo(Unit::class,'unit_id','id');
    }

}
