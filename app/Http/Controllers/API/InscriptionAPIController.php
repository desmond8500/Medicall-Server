<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateInscriptionAPIRequest;
use App\Http\Requests\API\UpdateInscriptionAPIRequest;
use App\Models\Inscription;
use App\Repositories\InscriptionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class InscriptionController
 * @package App\Http\Controllers\API
 */

class InscriptionAPIController extends AppBaseController
{
    /** @var  InscriptionRepository */
    private $inscriptionRepository;

    public function __construct(InscriptionRepository $inscriptionRepo)
    {
        $this->inscriptionRepository = $inscriptionRepo;
    }

    /**
     * Display a listing of the Inscription.
     * GET|HEAD /inscriptions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $inscriptions = $this->inscriptionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($inscriptions->toArray(), 'Inscriptions retrieved successfully');
    }

    /**
     * Store a newly created Inscription in storage.
     * POST /inscriptions
     *
     * @param CreateInscriptionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateInscriptionAPIRequest $request)
    {
        $input = $request->all();

        $inscription = $this->inscriptionRepository->create($input);

        return $this->sendResponse($inscription->toArray(), 'Inscription saved successfully');
    }

    /**
     * Display the specified Inscription.
     * GET|HEAD /inscriptions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Inscription $inscription */
        $inscription = $this->inscriptionRepository->find($id);

        if (empty($inscription)) {
            return $this->sendError('Inscription not found');
        }

        return $this->sendResponse($inscription->toArray(), 'Inscription retrieved successfully');
    }

    /**
     * Update the specified Inscription in storage.
     * PUT/PATCH /inscriptions/{id}
     *
     * @param int $id
     * @param UpdateInscriptionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInscriptionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Inscription $inscription */
        $inscription = $this->inscriptionRepository->find($id);

        if (empty($inscription)) {
            return $this->sendError('Inscription not found');
        }

        $inscription = $this->inscriptionRepository->update($input, $id);

        return $this->sendResponse($inscription->toArray(), 'Inscription updated successfully');
    }

    /**
     * Remove the specified Inscription from storage.
     * DELETE /inscriptions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Inscription $inscription */
        $inscription = $this->inscriptionRepository->find($id);

        if (empty($inscription)) {
            return $this->sendError('Inscription not found');
        }

        $inscription->delete();

        return $this->sendSuccess('Inscription deleted successfully');
    }
}
