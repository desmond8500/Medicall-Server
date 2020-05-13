<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Todo
 * @package App\Models
 * @version May 13, 2020, 8:15 am UTC
 *
 * @property string $name
 * @property string $description
 * @property string $user_id
 * @property string $categorie
 */
class Todo extends Model
{
    use SoftDeletes;

    public $table = 'todos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'user_id',
        'categorie'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'user_id' => 'string',
        'categorie' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
