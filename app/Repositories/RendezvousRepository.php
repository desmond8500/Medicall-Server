<?php

namespace App\Repositories;

use App\Models\Rendezvous;
use App\Repositories\BaseRepository;

/**
 * Class RendezvousRepository
 * @package App\Repositories
 * @version March 8, 2020, 5:20 pm UTC
*/

class RendezvousRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'email',
        'tel',
        'personnel'
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
        return Rendezvous::class;
    }
}
