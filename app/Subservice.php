<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subservice extends Model
{
	public function service()
    {
        return $this->belongsTo('App\Service');
    }
    public function title()
    {
        return $this->attributes['title_'.\App::getLocale()];
    }
    public function description()
    {
        return $this->attributes['description_'.\App::getLocale()];
    }
    public function items()
    {
        return $this->hasMany('App\SubserviceItem');
    }
    public function images()
    {
        return $this->hasMany('App\SubserviceImage');
    }
    public function portfolios()
    {
        return $this->belongsToMany('App\Portfolio', 'portfolio_items', 'item_id', 'portfolio_id');
    }
}
