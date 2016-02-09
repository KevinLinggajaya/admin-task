<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Business
 *
 * @property integer $id
 * @property string $name
 * @property string $contact
 * @property string $email
 * @property string $line_1
 * @property string $line_2
 * @property string $line_3
 * @property string $city
 * @property string $state
 * @property integer $postcode
 * @property \Carbon\Carbon $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
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
