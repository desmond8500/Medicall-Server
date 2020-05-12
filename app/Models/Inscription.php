<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Inscription
 * @package App\Models
 * @version May 12, 2020, 7:48 am UTC
 *
 * @property string $nom
 * @property string $tel
 * @property string $cv
 * @property string $resume
 */
class Inscription extends Model
{
    use SoftDeletes;

    public $table = 'inscriptions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'tel',
        'cv',
        'resume'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'tel' => 'string',
        'cv' => 'string',
        'resume' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
