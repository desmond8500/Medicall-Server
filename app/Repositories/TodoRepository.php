<?php

namespace App\Repositories;

use App\Models\Todo;
use App\Repositories\BaseRepository;

/**
 * Class TodoRepository
 * @package App\Repositories
 * @version May 13, 2020, 8:15 am UTC
*/

class TodoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'user_id',
        'categorie'
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
        return Todo::class;
    }
}
