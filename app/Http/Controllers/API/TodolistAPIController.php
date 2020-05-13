<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTodolistAPIRequest;
use App\Http\Requests\API\UpdateTodolistAPIRequest;
use App\Models\Todolist;
use App\Repositories\TodolistRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TodolistController
 * @package App\Http\Controllers\API
 */

class TodolistAPIController extends AppBaseController
{
    /** @var  TodolistRepository */
    private $todolistRepository;

    public function __construct(TodolistRepository $todolistRepo)
    {
        $this->todolistRepository = $todolistRepo;
    }

    /**
     * Display a listing of the Todolist.
     * GET|HEAD /todolists
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $todolists = $this->todolistRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($todolists->toArray(), 'Todolists retrieved successfully');
    }

    /**
     * Store a newly created Todolist in storage.
     * POST /todolists
     *
     * @param CreateTodolistAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTodolistAPIRequest $request)
    {
        $input = $request->all();

        $todolist = $this->todolistRepository->create($input);

        return $this->sendResponse($todolist->toArray(), 'Todolist saved successfully');
    }

    /**
     * Display the specified Todolist.
     * GET|HEAD /todolists/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Todolist $todolist */
        $todolist = $this->todolistRepository->find($id);

        if (empty($todolist)) {
            return $this->sendError('Todolist not found');
        }

        return $this->sendResponse($todolist->toArray(), 'Todolist retrieved successfully');
    }

    /**
     * Update the specified Todolist in storage.
     * PUT/PATCH /todolists/{id}
     *
     * @param int $id
     * @param UpdateTodolistAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTodolistAPIRequest $request)
    {
        $input = $request->all();

        /** @var Todolist $todolist */
        $todolist = $this->todolistRepository->find($id);

        if (empty($todolist)) {
            return $this->sendError('Todolist not found');
        }

        $todolist = $this->todolistRepository->update($input, $id);

        return $this->sendResponse($todolist->toArray(), 'Todolist updated successfully');
    }

    /**
     * Remove the specified Todolist from storage.
     * DELETE /todolists/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Todolist $todolist */
        $todolist = $this->todolistRepository->find($id);

        if (empty($todolist)) {
            return $this->sendError('Todolist not found');
        }

        $todolist->delete();

        return $this->sendSuccess('Todolist deleted successfully');
    }
}
