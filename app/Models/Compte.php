<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Compte",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="pseudo",
 *          description="pseudo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="pass",
 *          description="pass",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tel",
 *          description="tel",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="prenom",
 *          description="prenom",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nom",
 *          description="nom",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="genre",
 *          description="genre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Compte extends Model
{
    use SoftDeletes;

    public $table = 'comptes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'pseudo',
        'pass',
        'tel',
        'prenom',
        'nom',
        'genre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pseudo' => 'string',
        'pass' => 'string',
        'tel' => 'string',
        'prenom' => 'string',
        'nom' => 'string',
        'genre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
