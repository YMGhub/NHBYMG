<?php

namespace App\Http\Controllers;

use App\Models\ImageOurDepartments;
use App\Models\OurDepartments;
use Illuminate\Http\Request;

class OurDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->query('search');

        $ourdeparment = OurDepartments::query()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        return view('admin.our-department.index', compact('ourdeparment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.our-department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'our_deparment.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gallery = OurDepartments::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $imageName = time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('images/our_deparment'), $imageName);
                ImageOurDepartments::create([
                    'our_departments_id' => $gallery->id,
                    'path' => $imageName,
                ]);
            }
        }

        return redirect()->route('admin.our-department.index')
            ->with('success', 'Deparment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = OurDepartments::find($id);

        $data1 = ImageOurDepartments::where('our_deparments_id', $id)->get();



        return view('admin.our-department.edit', compact('data', 'data1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurDepartments $ourDeparment)
    {
        //



        $id = $_POST['id_department'];



        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'our_deparment.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        // Update gallery title and description
        $ourDeparment->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);


        // Handle image removal
        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $imageId) {
                $image = ImageOurDepartments::findOrFail($imageId);

                $imagePath = public_path('images/our_deparment') . '/' . $image->path;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
        }

        // Handle new image uploads
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $imageFile) {
                $imageName = time() . rand(1, 1000) . '.' . $imageFile->extension();
                $imageFile->move(public_path('images/our_deparment'), $imageName);
                ImageOurDepartments::create([
                    'our_departments_id' => $id,
                    'path' => $imageName,
                ]);
            }
        }

        $ourdept = OurDepartments::find($id);

        $ourdept->title = $request->input('title');
        $ourdept->description = $request->input('description');





        //$ourexecutives->update();

        $update = $ourdept->update();


        return redirect()->route('admin.our-department.index')
            ->with('success', 'Our Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $ourExe = OurDepartments::findOrFail($id);
        $ourExe->delete();


        return redirect()->route('admin.our-department.index')->with('success', 'Department deleted successfully');
    }

    //get content our_deparment us to frontpage
    public function ourdepartment_info()
    {
        $data = OurDepartments::with('images')->get();


        return view('our-department', compact('data'));
    }
}