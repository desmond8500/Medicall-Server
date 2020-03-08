<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRendezvousAPIRequest;
use App\Http\Requests\API\UpdateRendezvousAPIRequest;
use App\Models\Rendezvous;
use App\Repositories\RendezvousRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RendezvousController
 * @package App\Http\Controllers\API
 */

class RendezvousAPIController extends AppBaseController
{
    /** @var  RendezvousRepository */
    private $rendezvousRepository;

    public function __construct(RendezvousRepository $rendezvousRepo)
    {
        $this->rendezvousRepository = $rendezvousRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/rendezvouses",
     *      summary="Get a listing of the Rendezvouses.",
     *      tags={"Rendezvous"},
     *      description="Get all Rendezvouses",
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
     *                  @SWG\Items(ref="#/definitions/Rendezvous")
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
        $rendezvouses = $this->rendezvousRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($rendezvouses->toArray(), 'Rendezvouses retrieved successfully');
    }

    /**
     * @param CreateRendezvousAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/rendezvouses",
     *      summary="Store a newly created Rendezvous in storage",
     *      tags={"Rendezvous"},
     *      description="Store Rendezvous",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Rendezvous that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Rendezvous")
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
     *                  ref="#/definitions/Rendezvous"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateRendezvousAPIRequest $request)
    {
        $input = $request->all();

        $rendezvous = $this->rendezvousRepository->create($input);

        return $this->sendResponse($rendezvous->toArray(), 'Rendezvous saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/rendezvouses/{id}",
     *      summary="Display the specified Rendezvous",
     *      tags={"Rendezvous"},
     *      description="Get Rendezvous",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Rendezvous",
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
     *                  ref="#/definitions/Rendezvous"
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
        /** @var Rendezvous $rendezvous */
        $rendezvous = $this->rendezvousRepository->find($id);

        if (empty($rendezvous)) {
            return $this->sendError('Rendezvous not found');
        }

        return $this->sendResponse($rendezvous->toArray(), 'Rendezvous retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateRendezvousAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/rendezvouses/{id}",
     *      summary="Update the specified Rendezvous in storage",
     *      tags={"Rendezvous"},
     *      description="Update Rendezvous",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Rendezvous",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Rendezvous that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Rendezvous")
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
     *                  ref="#/definitions/Rendezvous"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateRendezvousAPIRequest $request)
    {
        $input = $request->all();

        /** @var Rendezvous $rendezvous */
        $rendezvous = $this->rendezvousRepository->find($id);

        if (empty($rendezvous)) {
            return $this->sendError('Rendezvous not found');
        }

        $rendezvous = $this->rendezvousRepository->update($input, $id);

        return $this->sendResponse($rendezvous->toArray(), 'Rendezvous updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/rendezvouses/{id}",
     *      summary="Remove the specified Rendezvous from storage",
     *      tags={"Rendezvous"},
     *      description="Delete Rendezvous",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Rendezvous",
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
        /** @var Rendezvous $rendezvous */
        $rendezvous = $this->rendezvousRepository->find($id);

        if (empty($rendezvous)) {
            return $this->sendError('Rendezvous not found');
        }

        $rendezvous->delete();

        return $this->sendSuccess('Rendezvous deleted successfully');
    }
}
