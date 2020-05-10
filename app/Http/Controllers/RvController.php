<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRvRequest;
use App\Http\Requests\UpdateRvRequest;
use App\Repositories\RvRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RvController extends AppBaseController
{
    /** @var  RvRepository */
    private $rvRepository;

    public function __construct(RvRepository $rvRepo)
    {
        $this->rvRepository = $rvRepo;
    }

    /**
     * Display a listing of the Rv.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rvs = $this->rvRepository->paginate(10);

        return view('rvs.index')
            ->with('rvs', $rvs);
    }

    /**
     * Show the form for creating a new Rv.
     *
     * @return Response
     */
    public function create()
    {
        return view('rvs.create');
    }

    /**
     * Store a newly created Rv in storage.
     *
     * @param CreateRvRequest $request
     *
     * @return Response
     */
    public function store(CreateRvRequest $request)
    {
        $input = $request->all();
        $rv = $this->rvRepository->create($input);

        Flash::success('Rv saved successfully.');

        return redirect()->back()->with('success','Votre message a été enregistré nous vous contacterons sous peu.');
    }

    /**
     * Display the specified Rv.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rv = $this->rvRepository->find($id);

        if (empty($rv)) {
            Flash::error('Rv not found');

            return redirect(route('rvs.index'));
        }

        return view('rvs.show')->with('rv', $rv);
    }

    /**
     * Show the form for editing the specified Rv.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rv = $this->rvRepository->find($id);

        if (empty($rv)) {
            Flash::error('Rv not found');

            return redirect(route('rvs.index'));
        }

        return view('rvs.edit')->with('rv', $rv);
    }

    /**
     * Update the specified Rv in storage.
     *
     * @param int $id
     * @param UpdateRvRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRvRequest $request)
    {
        $rv = $this->rvRepository->find($id);

        if (empty($rv)) {
            Flash::error('Rv not found');

            return redirect(route('rvs.index'));
        }

        $rv = $this->rvRepository->update($request->all(), $id);

        Flash::success('Rv updated successfully.');

        return redirect(route('rvs.index'));
    }

    /**
     * Remove the specified Rv from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rv = $this->rvRepository->find($id);

        if (empty($rv)) {
            Flash::error('Rv not found');

            return redirect(route('rvs.index'));
        }

        $this->rvRepository->delete($id);

        Flash::success('Rv deleted successfully.');

        return redirect(route('rvs.index'));
    }
}
