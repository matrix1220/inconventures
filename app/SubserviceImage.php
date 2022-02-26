<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SubserviceImage extends Model
{
    public function subservice()
    {
        return $this->belongsTo('App\Subservice');
    }
    public function item()
    {
        return $this->belongsTo('App\SubserviceItem', 'subservice_item_id', 'id');
    }
}
