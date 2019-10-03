<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Task;

class ProjectTaskController extends Controller
{
    public function store(Project $project)
    {
        $atributtes = request()->validate([
            'description' => ['required', 'min:3']
        ]);
        $project->addTask($atributtes);
        return back();
    }

   
}
