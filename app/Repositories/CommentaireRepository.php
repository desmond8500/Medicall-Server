<?php

namespace App\Repositories;

use App\Models\Commentaire;
use App\Repositories\BaseRepository;

/**
 * Class CommentaireRepository
 * @package App\Repositories
 * @version January 20, 2020, 9:03 pm UTC
*/

class CommentaireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'mail',
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
