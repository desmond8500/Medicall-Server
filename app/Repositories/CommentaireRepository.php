<?php

namespace App\Repositories;

use App\Models\Commentaire;
use App\Repositories\BaseRepository;

/**
 * Class CommentaireRepository
 * @package App\Repositories
 * @version March 8, 2020, 3:27 pm UTC
*/

class CommentaireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'mail',
        'tel',
        'message'
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
        return Commentaire::class;
    }
}
