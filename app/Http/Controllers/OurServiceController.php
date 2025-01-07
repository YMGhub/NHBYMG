<?php

namespace App\Http\Controllers;

use App\Models\ImagesOurServices;
use App\Models\OurServices;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    //
    public function index()
    {
        $contents = OurServices::all();
        return view('admin.our-services.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.our-services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            //'url_form' => '',
            'image_path.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // $ourServices = OurServices::create($request->only('title'), $request->only('description'));

        $ourServices = OurServices::create([
            'title' => $request->title,
            'description' => $request->description,
            'url_form' => $request->url_form
        ]);


        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();


            // Por ejemplo, guardar el archivo con un nombre único y la extensión original
            $filename = time() . rand(1, 1000) . '.' . $extension;
            $path = $file->storeAs('our_services', $filename, 'public');

            ImagesOurServices::create([
                'our_services_id' => $ourServices->id,
                'path' => $filename,
            ]);
        }


        return redirect()->route('admin.our-services.index')
            ->with('success', 'Services created successfully.');
    }

    public function edit(string $id)
    {
        //
        $content = OurServices::find($id);

        $content1 = ImagesOurServices::where('our_services_id', $id)->get();



        return view('admin.our-services.edit', compact('content', 'content1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurServices $ourServices)
    {
        //



        $id = $_POST['id_ourservices'];



        $request->validate([
            'title' => 'required',
            'description' => 'required',
            //'url_form' => 'required',
            'image_path.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        // Update gallery title and description
        $ourServices->update([
            'name' => $request->name,
            'description' => $request->description,
            'url_form' => $request->url_form,

        ]);


        // Handle image removal
        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $imageId) {
                $image = ImagesOurServices::findOrFail($imageId);

                $imagePath = url('storage/' . $image->path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
        }

        // Handle new image uploads

        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $extension = $file->getClientOriginalExtension();


            // Por ejemplo, guardar el archivo con un nombre único y la extensión original
            $filename = time() . rand(1, 1000) . '.' . $extension;
            $path = $file->storeAs('our_services', $filename, 'public');

            ImagesOurServices::create([
                'our_services_id' => $id,
                'path' => $filename,
            ]);
        }

        $ourserv = OurServices::find($id);

        $ourserv->title = $request->input('title');
        $ourserv->description = $request->input('description');
        $ourserv->url_form = $request->input('url_form');

        //$ourexecutives->update();

        $update = $ourserv->update();


        return redirect()->route('admin.our-services.index')
            ->with('success', 'Our Services updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $ourExe = OurServices::findOrFail($id);
        $ourExe->delete();


        return redirect()->route('admin.our-services.index')->with('success', 'Our Service deleted successfully');
    }

    public function ourservices_info()
    {
        $data = OurServices::with('imagesOurServices')->get();


        return view('our-services', compact('data'));
    }

    public function ourservices_info2()
    {
        $data = OurServices::with('imagesOurServices')->get();


        return $data;
    }
}
