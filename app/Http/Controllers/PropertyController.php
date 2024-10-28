<?php


namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyImage;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::with('category')->get();
        return view('admin.properties.index', compact('properties'));
    }

    public function create()
    {
        $categories = PropertyCategory::all();
        return view('admin.properties.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'address' => 'required',
            'area' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'price_or_rent_type' => 'required',
            'category' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $property = Property::create($request->all());

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('images/properties'), $name);
                $property->images()->create(['image_path' => $name]);
            }
        }






        return redirect()->route('admin.properties.index')->with('success', 'Property created successfully.');
    }

    public function show(Property $property)
    {
        return view('admin.properties.show', compact('property'));
    }

    public function edit(string $id)
    {
        //
        $content = Property::find($id);
        $categories = PropertyCategory::all();
        $gallery = PropertyImage::where("property_id", $id)->get();

        return view('admin.properties.edit', compact('content', 'categories', 'gallery'));
    }

    public function update(Request $request, Property $property)
    {

        $id = $_POST['id_property'];

        $request->validate([
            'title' => 'required',
            'address' => 'required',
            'area' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'price_or_rent_type' => 'required',
            'category' => 'required',
            'author' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $property->update($request->all());

        // Handle image removal
        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $imageId) {
                $image = PropertyImage::findOrFail($imageId);

                $imagePath = url('images/properties' . $image->path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }
        }

        // Handle new image uploads

        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {
                // Generamos un nombre único para cada imagen
                $imageName = time() . '-' . $image->getClientOriginalName();

                // Movemos la imagen a la carpeta de destino
                $image->move(public_path('images/properties'), $imageName);


                PropertyImage::create([
                    'property_id' => $id,
                    'image_path' =>  $imageName,
                ]);
            }
        }

        $property = Property::find($id);

        $property->title = $request->input('title');
        $property->address = $request->input('address');
        $property->area = $request->input('area');
        $property->bedrooms = $request->input('bedrooms');
        $property->bathrooms = $request->input('bathrooms');
        $property->price_or_rent_type = $request->input('price_or_rent_type');
        $property->category = $request->input('category');
        $property->google_map_propertie = $request->input('google_map_propertie');
        $property->author = $request->input('author');



        //$ourexecutives->update();

        $update = $property->update();


        // Aquí puedes manejar la actualización de las imágenes de la propiedad

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully.');
    }

    public function properties_info2()
    {
        $dataproperties = Property::with('images')->get();


        return $dataproperties;
    }
}