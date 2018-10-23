<?php

namespace App\Services;

use App\Todo;

class TodoService {
    /**
     * Get method for getting users todos
     */
    public static function index() {
        $user_id = Auth()->user()->id;

        return Todo::where('user_id', $user_id)->get();
    }
    /**
     * Post method for storing new todo
     */
    public static function store($request) {

        $user_id = Auth()->user()->id;
        return Todo::create([
            'title' => $request['title'],
            'priority' => $request['priority'],
            'is_done' => $request['is_done'],
            'user_id' => $user_id,
        ]);
    }
    /**
     * Destroy method for deleting todo
     */
    public static function destroy($todo) {
        return Todo::destroy($todo);
    }
    /**
     * Put method for updating todos
     */
    public static function update($request, $todo) {
        $todoForUpdate = Todo::findOrFail($todo);
        $todoForUpdate->update([
            'title' => $request['title'],
            'priority' => $request['priority'],
            'is_done' => $request['is_done'],
        ]);

        return response()->json($todoForUpdate);
    }
}
