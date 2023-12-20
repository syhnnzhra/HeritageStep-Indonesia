<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function Category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id','id');
    }
    public function Item()
    {
        return $this->hasMany('App\Models\OderDetail', 'item_id','id');
    }
}
