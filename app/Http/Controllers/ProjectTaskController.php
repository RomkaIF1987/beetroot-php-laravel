<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  Task $task
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Project $project, Request $request)
    {
        $param = $request->validate(['description' => 'required|max:255|min:3']);

        $project->addTask($param['description']);

        return back();
    }
}

