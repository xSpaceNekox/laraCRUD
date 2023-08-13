<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $validatedData = $this->validateData($request);

    $imagePath = $validatedData['image']->store('skills');

    Skill::create([
        'name' => $validatedData['name'],
        'image' => $imagePath,
    ]);

    return redirect()->route('skills.index')->with('message', 'Skill created successfully.');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Skill $skill)
{
    $validatedData = $this->validateData($request, true);

    $imagePath = $skill->image;

    if ($request->hasFile('image')) {
        Storage::delete($skill->image);
        $imagePath = $request->file('image')->store('skills');
    }

    $skill->update([
        'name' => $validatedData['name'],
        'image' => $imagePath,
    ]);

    return redirect()->route('skills.index')->with('message', 'Skill updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();

         return redirect()->route('skills.index')->with('message', 'Skill Deleted.');
    }

    public function validateData(Request $request, $update = false) {
        $rules = [
            'name' => ['required', 'min:3'],
        ];

        if (!$update) {
            $rules['image'] = ['required', 'image'];
        }

        return $request->validate($rules);
    }
}
