<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Todolist
 * @package App\Models
 * @version May 13, 2020, 8:16 am UTC
 *
 * @property string $title
 * @property string $status
 * @property string $task_id
 */
class Todolist extends Model
{
    use SoftDeletes;

    public $table = 'todolists';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'status',
        'task_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'status' => 'string',
        'task_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
