<?php

namespace App\Http\Controllers\Admin;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::first();
        return view('admin.experience.index', compact('experience'));
    }


    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $request->validate([
    //         'image' => ['image', 'max:5000'],
    //         'title' => ['required', 'max:200'],
    //         'description' => ['required', 'max:1000'],
    //         'phone' => ['nullable', 'max:100'],
    //         'email' => ['nullable', 'max:100', 'email']
    //     ]);

    //     $experience = Experience::find($id);
    //     $imagePath = handleUpload('image', $experience);

    //     Experience::updateOrCreate(
    //         ['id' => $id],
    //         [
    //            'image' => (!empty($imagePath) ? $imagePath : $experience->image),
    //            'title' => $request->title,
    //            'description' => $request->description,
    //            'phone' => $request->phone,
    //            'email' => $request->email
    //         ]
    //     );

    //     toastr('Updated Successfully!', 'success');

    //     return redirect()->back();
    // }

    public function create()
    {
        return view('admin.experience.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'description' => ['required', 'max:1000'],
            'phone' => ['nullable', 'max:100'],
            'email' => ['nullable', 'max:100', 'email']
        ]);

        $imagePath = handleUpload('image');

        Experience::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.experience.index');
    }

    public function edit(string $id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experience.edit', compact('experience'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'description' => ['required', 'max:1000'],
            'phone' => ['nullable', 'max:100'],
            'email' => ['nullable', 'max:100', 'email']
        ]);

        $experience = Experience::find($id);
        $imagePath = handleUpload('image', $experience);

        Experience::updateOrCreate(
            ['id' => $id],
            [
               'image' => (!empty($imagePath) ? $imagePath : $experience->image),
               'title' => $request->title,
               'description' => $request->description,
               'phone' => $request->phone,
               'email' => $request->email
            ]
        );

        toastr('Updated Successfully!', 'success');

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $experience = Experience::findOrFail($id);
        deleteImage($experience->image);
        $experience->delete();
        
        toastr('Deleted Successfully!', 'success');
        return redirect()->back();
    }

 
}
