<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use App\Repositories\NewsletterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NewsletterController extends AppBaseController
{
    /** @var  NewsletterRepository */
    private $newsletterRepository;

    public function __construct(NewsletterRepository $newsletterRepo)
    {
        $this->newsletterRepository = $newsletterRepo;
    }

    /**
     * Display a listing of the Newsletter.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $newsletters = $this->newsletterRepository->paginate(10);

        return view('newsletters.index')
            ->with('newsletters', $newsletters);
    }

    /**
     * Show the form for creating a new Newsletter.
     *
     * @return Response
     */
    public function create()
    {
        return view('newsletters.create');
    }

    /**
     * Store a newly created Newsletter in storage.
     *
     * @param CreateNewsletterRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsletterRequest $request)
    {
        $input = $request->all();

        $newsletter = $this->newsletterRepository->create($input);

        Flash::success('Newsletter saved successfully.');

        return redirect()->back()->with('success', 'Votre adresse mail a été enregistré. Vous allez désormais être informés des nouveautés.');
    }

    /**
     * Display the specified Newsletter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $newsletter = $this->newsletterRepository->find($id);

        if (empty($newsletter)) {
            Flash::error('Newsletter not found');

            return redirect(route('newsletters.index'));
        }

        return view('newsletters.show')->with('newsletter', $newsletter);
    }

    /**
     * Show the form for editing the specified Newsletter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $newsletter = $this->newsletterRepository->find($id);

        if (empty($newsletter)) {
            Flash::error('Newsletter not found');

            return redirect(route('newsletters.index'));
        }

        return view('newsletters.edit')->with('newsletter', $newsletter);
    }

    /**
     * Update the specified Newsletter in storage.
     *
     * @param int $id
     * @param UpdateNewsletterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsletterRequest $request)
    {
        $newsletter = $this->newsletterRepository->find($id);

        if (empty($newsletter)) {
            Flash::error('Newsletter not found');

            return redirect(route('newsletters.index'));
        }

        $newsletter = $this->newsletterRepository->update($request->all(), $id);

        Flash::success('Newsletter updated successfully.');

        return redirect(route('newsletters.index'));
    }

    /**
     * Remove the specified Newsletter from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $newsletter = $this->newsletterRepository->find($id);

        if (empty($newsletter)) {
            Flash::error('Newsletter not found');

            return redirect(route('newsletters.index'));
        }

        $this->newsletterRepository->delete($id);

        Flash::success('Newsletter deleted successfully.');

        return redirect(route('newsletters.index'));
    }
}
