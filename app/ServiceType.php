<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ServiceType extends Model
{
    public function name()
    {
        return $this->attributes['name_'.\App::getLocale()];
    }
}
