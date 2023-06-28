<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img', 'url', 'top_text', 'middle_text', 'bottom_text','action_text','class', 'status'
    ];
    
}
