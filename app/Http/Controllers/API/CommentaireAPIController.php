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
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/commentaires",
     *      summary="Get a listing of the Commentaires.",
     *      tags={"Commentaire"},
     *      description="Get all Commentaires",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Commentaire")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
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
     * @param CreateCommentaireAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/commentaires",
     *      summary="Store a newly created Commentaire in storage",
     *      tags={"Commentaire"},
     *      description="Store Commentaire",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Commentaire that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Commentaire")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Commentaire"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateCommentaireAPIRequest $request)
    {
        $input = $request->all();

        $commentaire = $this->commentaireRepository->create($input);

        return $this->sendResponse($commentaire->toArray(), 'Commentaire saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/commentaires/{id}",
     *      summary="Display the specified Commentaire",
     *      tags={"Commentaire"},
     *      description="Get Commentaire",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Commentaire",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Commentaire"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
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
     * @param int $id
     * @param UpdateCommentaireAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/commentaires/{id}",
     *      summary="Update the specified Commentaire in storage",
     *      tags={"Commentaire"},
     *      description="Update Commentaire",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Commentaire",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Commentaire that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Commentaire")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Commentaire"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
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
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/commentaires/{id}",
     *      summary="Remove the specified Commentaire from storage",
     *      tags={"Commentaire"},
     *      description="Delete Commentaire",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Commentaire",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
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
