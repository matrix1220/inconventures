<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    public function subservices()
    {
        return $this->hasMany('App\Subservice');
    }
    public function title()
    {
        return $this->attributes['title_'.\App::getLocale()];
    }
    public function description()
    {
        return $this->attributes['description_'.\App::getLocale()];
    }
    public function long_description()
    {
        return $this->attributes['long_description_'.\App::getLocale()];
    }
}
