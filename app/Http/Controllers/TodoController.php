<?php

namespace App\Http\Controllers;
use App\Http\Requests\TodoRequest;
use App\Services\TodoService;
use App\Todo;

class TodoController extends Controller {

    /**
     *Get method calling Todo servis to get users todos
     */
    public function index() {
        return TodoService::index();
    }
    /**
     * post method calling todoservies to store new todo
     */
    public function store(TodoRequest $request) {
        return TodoService::store($request);
    }
    /**
     * Delete method calling todo servis to delete todo
     */
    public function destroy($todo) {
        return TodoService::destroy($todo);
    }

    /**
     * Put method calling todo servis to update todo
     */
    public function update(TodoRequest $request, $todo) {

        return TodoService::update($request, $todo);
    }
}
