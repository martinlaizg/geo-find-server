<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the user created tours
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
