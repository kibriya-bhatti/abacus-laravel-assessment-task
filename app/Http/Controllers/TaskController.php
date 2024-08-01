<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy("id","desc")->get();
        return view("application.tasks",["tasks"=>$tasks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->name =  $request->task_name;
        $task->description =  $request->task_description;
        $task->task_created_at = time();
        $task->save();
        return back()->with("success","Tasks successfully added");
    }
}
