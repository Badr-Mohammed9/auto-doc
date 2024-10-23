<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getAllProjects() {
        $projects = Project::all();
        return view('projects',['projects' => $projects]);
    }

    public function get_create() {
        return view('create-projects');
    }

    public function create_project(Request $request) {
        $validated = $request->validate([
            'name' => 'string|required',
            'status' => 'string|required',
            'type' => 'string|required',
        ]);

        Project::create($validated);
        return redirect('/projects');
    }
}
