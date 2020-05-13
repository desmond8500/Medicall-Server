<?php

namespace App\Repositories;

use App\Models\Todolist;
use App\Repositories\BaseRepository;

/**
 * Class TodolistRepository
 * @package App\Repositories
 * @version May 13, 2020, 8:16 am UTC
*/

class TodolistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'status',
        'task_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Todolist::class;
    }
}
