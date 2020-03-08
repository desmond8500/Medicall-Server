<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Commentaire
 * @package App\Models
 * @version March 8, 2020, 3:27 pm UTC
 *
 * @property string nom
 * @property string mail
 * @property string tel
 * @property string message
 */
class Commentaire extends Model
{
    use SoftDeletes;

    public $table = 'commentaires';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'mail',
        'tel',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'mail' => 'string',
        'tel' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
