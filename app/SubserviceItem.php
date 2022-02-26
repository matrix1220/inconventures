<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SubserviceItem extends Model
{
    public function name()
    {
        return $this->attributes['name_'.\App::getLocale()];
    }
    public function Subservice()
    {
        return $this->belongsTo('App\Subservice');
    }
}
