<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    public function items()
    {
        return $this->belongsToMany('App\Subservice', 'portfolio_items', 'portfolio_id', 'item_id');
    }
    public function description()
    {
        return $this->attributes['description_'.\App::getLocale()];
    }
}
