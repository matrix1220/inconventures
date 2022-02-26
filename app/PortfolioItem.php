<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PortfolioItem extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Subservice', 'item_id', 'id');
    }
    // public function portfolio()
    // {
    //     return $this->belongsTo('App\Portfolio', 'id', 'portfolio_id');
    // }
}
