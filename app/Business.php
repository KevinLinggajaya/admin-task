<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use SoftDeletes;


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should are fillable.
     *
     * @var array
     */
    protected $fillable = ['name', 'contact', 'email', 'line_1', 'line_2', 'line_3', 'city', 'state', 'postcode'];
}
