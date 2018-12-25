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
    public function update(Request $request, Task $task)
    {
        $completed = $request->has('completed');

        $task->update(['completed' => $completed]);

        return redirect()->route('project.show', ['project' => $task->project->id]);
    }

//    public function store(Project $project, Request $request)
//    {
//        Task::create([
//            'project_id' => $project->id,
//            'description' => $request->get('description')
//        ]);
//        return back();
//    }


    public function store(Project $project, Request $request)
    {
        $param = $request->validate(['description' => 'required|max:255|min:3']);

        $project->addTask($param['description']);

        return back();
    }
}

