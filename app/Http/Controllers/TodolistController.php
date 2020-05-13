<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodolistRequest;
use App\Http\Requests\UpdateTodolistRequest;
use App\Repositories\TodolistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TodolistController extends AppBaseController
{
    /** @var  TodolistRepository */
    private $todolistRepository;

    public function __construct(TodolistRepository $todolistRepo)
    {
        $this->todolistRepository = $todolistRepo;
    }

    /**
     * Display a listing of the Todolist.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $todolists = $this->todolistRepository->paginate(10);

        return view('todolists.index')
            ->with('todolists', $todolists);
    }

    /**
     * Show the form for creating a new Todolist.
     *
     * @return Response
     */
    public function create()
    {
        return view('todolists.create');
    }

    /**
     * Store a newly created Todolist in storage.
     *
     * @param CreateTodolistRequest $request
     *
     * @return Response
     */
    public function store(CreateTodolistRequest $request)
    {
        $input = $request->all();

        $todolist = $this->todolistRepository->create($input);

        Flash::success('Todolist saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Todolist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $todolist = $this->todolistRepository->find($id);

        if (empty($todolist)) {
            Flash::error('Todolist not found');

            return redirect(route('todolists.index'));
        }

        return view('todolists.show')->with('todolist', $todolist);
    }

    /**
     * Show the form for editing the specified Todolist.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $todolist = $this->todolistRepository->find($id);

        if (empty($todolist)) {
            Flash::error('Todolist not found');

            return redirect(route('todolists.index'));
        }

        return view('todolists.edit')->with('todolist', $todolist);
    }

    /**
     * Update the specified Todolist in storage.
     *
     * @param int $id
     * @param UpdateTodolistRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTodolistRequest $request)
    {
        $todolist = $this->todolistRepository->find($id);

        if (empty($todolist)) {
            Flash::error('Todolist not found');

            return redirect(route('todolists.index'));
        }

        $todolist = $this->todolistRepository->update($request->all(), $id);

        Flash::success('Todolist updated successfully.');

        return redirect()->back();
    }

    /**
     * Remove the specified Todolist from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $todolist = $this->todolistRepository->find($id);

        if (empty($todolist)) {
            Flash::error('Todolist not found');

            return redirect(route('todolists.index'));
        }

        $this->todolistRepository->delete($id);

        Flash::success('Todolist deleted successfully.');

        return redirect()->back();
    }
}
