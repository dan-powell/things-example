<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{

    protected $fillable = [
        // Details
        'name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $appends = [

    ];

    /****************
    * Relationships
    ****************/

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }

}
