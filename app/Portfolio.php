<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    public function service_types()
    {
        return $this->belongsToMany('App\ServiceType', 'portfolio_service_types');
    }
    public function description()
    {
        return $this->attributes['description_'.\App::getLocale()];
    }
}
