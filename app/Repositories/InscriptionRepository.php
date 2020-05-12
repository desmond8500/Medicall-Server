<?php

namespace App\Repositories;

use App\Models\Inscription;
use App\Repositories\BaseRepository;

/**
 * Class InscriptionRepository
 * @package App\Repositories
 * @version May 12, 2020, 7:48 am UTC
*/

class InscriptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'tel',
        'cv',
        'resume'
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
        return Inscription::class;
    }
}
