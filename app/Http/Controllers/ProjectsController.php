<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Validation\Rules\RequiredIf;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('/projects.index', compact('projects'));
    }
    public function create()
    {
        $projects = Project::all();
        return view('/projects.create');
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
        Project::create(request([
            'title',
            'description'
        ]));
        return redirect('/projects');
    }
    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }
    public function edit(Project $project)
    {
        return view('/projects.edit', compact('project'));
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
    public function show(Project $project)
    {

        return view('/projects.show', compact('project'));
    }
}
