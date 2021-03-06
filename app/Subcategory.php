<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'category_id','name'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');

    }

    public function items()
    {
        return $this->hasManyThrough('App\Item', 'subcategory_id');
    }
}
