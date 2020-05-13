<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTodoAPIRequest;
use App\Http\Requests\API\UpdateTodoAPIRequest;
use App\Models\Todo;
use App\Repositories\TodoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TodoController
 * @package App\Http\Controllers\API
 */

class TodoAPIController extends AppBaseController
{
    /** @var  TodoRepository */
    private $todoRepository;

    public function __construct(TodoRepository $todoRepo)
    {
        $this->todoRepository = $todoRepo;
    }

    /**
     * Display a listing of the Todo.
     * GET|HEAD /todos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $todos = $this->todoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($todos->toArray(), 'Todos retrieved successfully');
    }

    /**
     * Store a newly created Todo in storage.
     * POST /todos
     *
     * @param CreateTodoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTodoAPIRequest $request)
    {
        $input = $request->all();

        $todo = $this->todoRepository->create($input);

        return $this->sendResponse($todo->toArray(), 'Todo saved successfully');
    }

    /**
     * Display the specified Todo.
     * GET|HEAD /todos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Todo $todo */
        $todo = $this->todoRepository->find($id);

        if (empty($todo)) {
            return $this->sendError('Todo not found');
        }

        return $this->sendResponse($todo->toArray(), 'Todo retrieved successfully');
    }

    /**
     * Update the specified Todo in storage.
     * PUT/PATCH /todos/{id}
     *
     * @param int $id
     * @param UpdateTodoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTodoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Todo $todo */
        $todo = $this->todoRepository->find($id);

        if (empty($todo)) {
            return $this->sendError('Todo not found');
        }

        $todo = $this->todoRepository->update($input, $id);

        return $this->sendResponse($todo->toArray(), 'Todo updated successfully');
    }

    /**
     * Remove the specified Todo from storage.
     * DELETE /todos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Todo $todo */
        $todo = $this->todoRepository->find($id);

        if (empty($todo)) {
            return $this->sendError('Todo not found');
        }

        $todo->delete();

        return $this->sendSuccess('Todo deleted successfully');
    }
}
