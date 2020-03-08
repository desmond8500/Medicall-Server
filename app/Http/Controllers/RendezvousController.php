<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRendezvousRequest;
use App\Http\Requests\UpdateRendezvousRequest;
use App\Repositories\RendezvousRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RendezvousController extends AppBaseController
{
    /** @var  RendezvousRepository */
    private $rendezvousRepository;

    public function __construct(RendezvousRepository $rendezvousRepo)
    {
        $this->rendezvousRepository = $rendezvousRepo;
    }

    /**
     * Display a listing of the Rendezvous.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rendezvouses = $this->rendezvousRepository->paginate(10);

        return view('rendezvouses.index')
            ->with('rendezvouses', $rendezvouses);
    }

    /**
     * Show the form for creating a new Rendezvous.
     *
     * @return Response
     */
    public function create()
    {
        return view('rendezvouses.create');
    }

    /**
     * Store a newly created Rendezvous in storage.
     *
     * @param CreateRendezvousRequest $request
     *
     * @return Response
     */
    public function store(CreateRendezvousRequest $request)
    {
        $input = $request->all();

        $rendezvous = $this->rendezvousRepository->create($input);

        Flash::success('Rendezvous saved successfully.');

        return redirect(route('health'));
    }

    /**
     * Display the specified Rendezvous.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rendezvous = $this->rendezvousRepository->find($id);

        if (empty($rendezvous)) {
            Flash::error('Rendezvous not found');

            return redirect(route('rendezvouses.index'));
        }

        return view('rendezvouses.show')->with('rendezvous', $rendezvous);
    }

    /**
     * Show the form for editing the specified Rendezvous.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rendezvous = $this->rendezvousRepository->find($id);

        if (empty($rendezvous)) {
            Flash::error('Rendezvous not found');

            return redirect(route('rendezvouses.index'));
        }

        return view('rendezvouses.edit')->with('rendezvous', $rendezvous);
    }

    /**
     * Update the specified Rendezvous in storage.
     *
     * @param int $id
     * @param UpdateRendezvousRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRendezvousRequest $request)
    {
        $rendezvous = $this->rendezvousRepository->find($id);

        if (empty($rendezvous)) {
            Flash::error('Rendezvous not found');

            return redirect(route('rendezvouses.index'));
        }

        $rendezvous = $this->rendezvousRepository->update($request->all(), $id);

        Flash::success('Rendezvous updated successfully.');

        return redirect(route('rendezvouses.index'));
    }

    /**
     * Remove the specified Rendezvous from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rendezvous = $this->rendezvousRepository->find($id);

        if (empty($rendezvous)) {
            Flash::error('Rendezvous not found');

            return redirect(route('rendezvouses.index'));
        }

        $this->rendezvousRepository->delete($id);

        Flash::success('Rendezvous deleted successfully.');

        return redirect(route('rendezvouses.index'));
    }
}
