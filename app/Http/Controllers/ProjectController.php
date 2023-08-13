<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        $imagePath = $validatedData['image']->store('projects');
        
        Project::create([
            'name' => $validatedData['name'],
            'image' => $imagePath,
            'skill_id' => $validatedData['skill_id'],
            'project_url' => $validatedData['project_url'],
        ]);

           return redirect()->route('projects.index')->with('message', 'Project created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validatedData = $this->validateData($request, true);

        $imagePath = $project->image;

        if ($request->hasFile('image')) {
        Storage::delete($project->image);
        $imagePath = $request->file('image')->store('projects');
    }
    $project->update([
        'name' => $validatedData['name'],
        'image' => $imagePath,
        'skill_id' => $validatedData['skill_id'],
        'project_url' => $validatedData['project_url'],
    ]); 

     return redirect()->route('projects.index')->with('message', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();

       return redirect()->route('projects.index')->with('message', 'Project Deleted.');
    }

    public function validateData(Request $request, $update = false) {
        $rules = [
            'name' => ['required', 'min:3'],
            'skill_id' => ['required'],
            'project_url' => ['required'],
        ];

        if (!$update) {
            $rules['image'] = ['required', 'image'];
        }

        return $request->validate($rules);
    }
}
