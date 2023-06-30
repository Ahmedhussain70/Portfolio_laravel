<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image'],
            'name' => ['required', 'min:3']
        ]);

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image')->store('skills');
        //     Skill::create([
        //         'name' => $request->name,
        //         'image' => $image
        //     ]);
        if ($request->hasFile('image')) {
            // put image in the public storage
            $file = Storage::disk('public')->put('images/posts/image', request()->file('image'), 'public');
            // get the image path in the url
            $path = Storage::url($file);
            $validated['image'] = $path;
            Skill::create([
                'name' => $request->name,
                'image' => $path
            ]);

            return Redirect::route('skills.index')->with('message', 'Skill created successfully.');
        }
        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        // $image = $skill->image;
        // $request->validate([
        //     'name' => ['required', 'min:3']
        // ]);
        // if ($request->hasFile('image')) {
        //     Storage::delete($skill->image);
        //     $image = $request->file('image')->store('skills');
        // }

        // $skill->update([
        //     'name' => $request->name,
        //     'image' => $image
        // ]);

        $post = Skill::findOrFail($id);

        if ($request->hasFile('image')) {
            // get current image path and replace the storage path with public path
            $currentImage = str_replace('/storage', '/public', $post->image);
            // delete current image
            Storage::delete($currentImage);

            $file = Storage::disk('public')->put('images/posts/image', request()->file('image'), 'public');
            
            $path = Storage::url($file);
            $validated['image'] = $path;

            $update = $post->update($validated);
        }

        return Redirect::route('skills.index')->with('message', 'Skill updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        Storage::delete($skill->image);
        $skill->delete();

        return Redirect::back()->with('message', 'Skill deleted successfully.');
    }
}
