<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rv
 * @package App\Models
 * @version May 10, 2020, 8:24 pm UTC
 *
 * @property string $nom
 * @property string $email
 * @property string $tel
 * @property string $besoin
 * @property string $description
 * @property string $statut
 */
class Rv extends Model
{
    use SoftDeletes;

    public $table = 'rvs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'email',
        'tel',
        'besoin',
        'description',
        'statut'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'email' => 'string',
        'tel' => 'string',
        'besoin' => 'string',
        'description' => 'string',
        'statut' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
