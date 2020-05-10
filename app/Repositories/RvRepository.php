<?php

namespace App\Repositories;

use App\Models\Rv;
use App\Repositories\BaseRepository;

/**
 * Class RvRepository
 * @package App\Repositories
 * @version May 10, 2020, 8:24 pm UTC
*/

class RvRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'email',
        'tel',
        'besoin',
        'description',
        'statut'
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
        return Rv::class;
    }
}
