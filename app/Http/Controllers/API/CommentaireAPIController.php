<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCommentaireAPIRequest;
use App\Http\Requests\API\UpdateCommentaireAPIRequest;
use App\Models\Commentaire;
use App\Repositories\CommentaireRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CommentaireController
 * @package App\Http\Controllers\API
 */

class CommentaireAPIController extends AppBaseController
{
    /** @var  CommentaireRepository */
    private $commentaireRepository;

    public function __construct(CommentaireRepository $commentaireRepo)
    {
        $this->commentaireRepository = $commentaireRepo;
    }

    /**
     * Display a listing of the Commentaire.
     * GET|HEAD /commentaires
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $commentaires = $this->commentaireRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($commentaires->toArray(), 'Commentaires retrieved successfully');
    }

    /**
     * Store a newly created Commentaire in storage.
     * POST /commentaires
     *
     * @param CreateCommentaireAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentaireAPIRequest $request)
    {
        $input = $request->all();

        $commentaire = $this->commentaireRepository->create($input);

        return $this->sendResponse($commentaire->toArray(), 'Commentaire saved successfully');
    }

    /**
     * Display the specified Commentaire.
     * GET|HEAD /commentaires/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Commentaire $commentaire */
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            return $this->sendError('Commentaire not found');
        }

        return $this->sendResponse($commentaire->toArray(), 'Commentaire retrieved successfully');
    }

    /**
     * Update the specified Commentaire in storage.
     * PUT/PATCH /commentaires/{id}
     *
     * @param int $id
     * @param UpdateCommentaireAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentaireAPIRequest $request)
    {
        $input = $request->all();

        /** @var Commentaire $commentaire */
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            return $this->sendError('Commentaire not found');
        }

        $commentaire = $this->commentaireRepository->update($input, $id);

        return $this->sendResponse($commentaire->toArray(), 'Commentaire updated successfully');
    }

    /**
     * Remove the specified Commentaire from storage.
     * DELETE /commentaires/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Commentaire $commentaire */
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            return $this->sendError('Commentaire not found');
        }

        $commentaire->delete();

        return $this->sendSuccess('Commentaire deleted successfully');
    }
}
