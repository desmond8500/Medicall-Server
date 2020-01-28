<?php

namespace App\Repositories;

use App\Models\Compte;
use App\Repositories\BaseRepository;

/**
 * Class CompteRepository
 * @package App\Repositories
 * @version January 28, 2020, 2:42 pm UTC
*/

class CompteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pseudo',
        'pass',
        'tel',
        'prenom',
        'nom',
        'genre'
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
        return Compte::class;
    }
}
