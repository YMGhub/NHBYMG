<?php

namespace App\Http\Controllers;

use App\Models\ImagesOurProjects;
use App\Models\OurProjects;
use Illuminate\Http\Request;

class OurProjectsController extends Controller
{
    //
    public function index()
    {
        $contents = OurProjects::with('ImagesOurProjects')->get();
        return view('admin.our-projects.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.our-projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $ourProject = OurProjects::create($request->only('title'), $request->only('map_url'));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('our_projects', 'public');
                ImagesOurProjects::create([
                    'our_projects_id' => $ourProject->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.our-projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(string $id)
    {
        //
        $content = OurProjects::find($id);

        $content1 = ImagesOurProjects::where('our_projects_id', $id)->get();



        return view('admin.our-projects.edit', compact('content', 'content1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurProjects $ourProject)
    {
        //



        $id = $_POST['id_ourprojects'];



        $request->validate([
            'title' => 'required',
            'our_projects.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        // Update gallery title and description
        $ourProject->update([
            'title' => $request->title,
            'map_url' => $request->map_url,

        ]);


        // Handle image removal
        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $imageId) {
                $image = ImagesOurProjects::findOrFail($imageId);

                $imagePath = url('storage/' . $image->path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('our_projects', 'public');
                ImagesOurProjects::create([
                    'our_projects_id' => $id,
                    'path' => $path,
                ]);
            }
        }

        $ourproj = OurProjects::find($id);

        $ourproj->title = $request->input('title');
        $ourproj->map_url = $request->input('map_url');

        //$ourexecutives->update();

        $update = $ourproj->update();


        return redirect()->route('admin.our-projects.index')
            ->with('success', 'Our Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $ourExe = OurProjects::findOrFail($id);
        $ourExe->delete();


        return redirect()->route('admin.our-projects.index')->with('success', 'Our Project deleted successfully');
    }

    public function ourprojects_info()
    {
        $data = OurProjects::with('imagesOurProjects')->get();


        return view('projects', compact('data'));
    }
}