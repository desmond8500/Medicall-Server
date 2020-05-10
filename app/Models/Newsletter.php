<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Newsletter
 * @package App\Models
 * @version May 10, 2020, 9:26 pm UTC
 *
 * @property string $email
 */
class Newsletter extends Model
{
    use SoftDeletes;

    public $table = 'newsletters';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
