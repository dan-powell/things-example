<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
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

    public function shelf()
    {
        return $this->belongsTo('App\Models\Book');
    }

}
