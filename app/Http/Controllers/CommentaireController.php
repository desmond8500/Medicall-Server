<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use App\Repositories\CommentaireRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CommentaireController extends AppBaseController
{
    /** @var  CommentaireRepository */
    private $commentaireRepository;

    public function __construct(CommentaireRepository $commentaireRepo)
    {
        $this->commentaireRepository = $commentaireRepo;
    }

    /**
     * Display a listing of the Commentaire.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $commentaires = $this->commentaireRepository->paginate(10);

        return view('commentaires.index')
            ->with('commentaires', $commentaires);
    }

    /**
     * Show the form for creating a new Commentaire.
     *
     * @return Response
     */
    public function create()
    {
        return view('commentaires.create');
    }

    /**
     * Store a newly created Commentaire in storage.
     *
     * @param CreateCommentaireRequest $request
     *
     * @return Response
     */
    public function store(CreateCommentaireRequest $request)
    {
        $input = $request->all();

        $commentaire = $this->commentaireRepository->create($input);

        Flash::success('Commentaire saved successfully.');

        return redirect(route('commentaires.index'));
    }

    /**
     * Display the specified Commentaire.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            Flash::error('Commentaire not found');

            return redirect(route('commentaires.index'));
        }

        return view('commentaires.show')->with('commentaire', $commentaire);
    }

    /**
     * Show the form for editing the specified Commentaire.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            Flash::error('Commentaire not found');

            return redirect(route('commentaires.index'));
        }

        return view('commentaires.edit')->with('commentaire', $commentaire);
    }

    /**
     * Update the specified Commentaire in storage.
     *
     * @param int $id
     * @param UpdateCommentaireRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommentaireRequest $request)
    {
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            Flash::error('Commentaire not found');

            return redirect(route('commentaires.index'));
        }

        $commentaire = $this->commentaireRepository->update($request->all(), $id);

        Flash::success('Commentaire updated successfully.');

        return redirect(route('commentaires.index'));
    }

    /**
     * Remove the specified Commentaire from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commentaire = $this->commentaireRepository->find($id);

        if (empty($commentaire)) {
            Flash::error('Commentaire not found');

            return redirect(route('commentaires.index'));
        }

        $this->commentaireRepository->delete($id);

        Flash::success('Commentaire deleted successfully.');

        return redirect(route('commentaires.index'));
    }
}
