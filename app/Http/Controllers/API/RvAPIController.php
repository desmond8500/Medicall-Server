<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRvAPIRequest;
use App\Http\Requests\API\UpdateRvAPIRequest;
use App\Models\Rv;
use App\Repositories\RvRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RvController
 * @package App\Http\Controllers\API
 */

class RvAPIController extends AppBaseController
{
    /** @var  RvRepository */
    private $rvRepository;

    public function __construct(RvRepository $rvRepo)
    {
        $this->rvRepository = $rvRepo;
    }

    /**
     * Display a listing of the Rv.
     * GET|HEAD /rvs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $rvs = $this->rvRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($rvs->toArray(), 'Rvs retrieved successfully');
    }

    /**
     * Store a newly created Rv in storage.
     * POST /rvs
     *
     * @param CreateRvAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRvAPIRequest $request)
    {
        $input = $request->all();

        $rv = $this->rvRepository->create($input);

        return $this->sendResponse($rv->toArray(), 'Rv saved successfully');
    }

    /**
     * Display the specified Rv.
     * GET|HEAD /rvs/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Rv $rv */
        $rv = $this->rvRepository->find($id);

        if (empty($rv)) {
            return $this->sendError('Rv not found');
        }

        return $this->sendResponse($rv->toArray(), 'Rv retrieved successfully');
    }

    /**
     * Update the specified Rv in storage.
     * PUT/PATCH /rvs/{id}
     *
     * @param int $id
     * @param UpdateRvAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRvAPIRequest $request)
    {
        $input = $request->all();

        /** @var Rv $rv */
        $rv = $this->rvRepository->find($id);

        if (empty($rv)) {
            return $this->sendError('Rv not found');
        }

        $rv = $this->rvRepository->update($input, $id);

        return $this->sendResponse($rv->toArray(), 'Rv updated successfully');
    }

    /**
     * Remove the specified Rv from storage.
     * DELETE /rvs/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Rv $rv */
        $rv = $this->rvRepository->find($id);

        if (empty($rv)) {
            return $this->sendError('Rv not found');
        }

        $rv->delete();

        return $this->sendSuccess('Rv deleted successfully');
    }
}
