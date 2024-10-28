<?php

// app/Http/Controllers/PropertyCategoryController.php

namespace App\Http\Controllers;

use App\Models\PropertyCategory;
use Illuminate\Http\Request;

class PropertyCategoryController extends Controller
{
    // Muestra todas las categorías de propiedades
    public function index()
    {
        $categories = PropertyCategory::all();
        return view('admin.property_categories.index', compact('categories'));
    }

    // Muestra el formulario para crear una nueva categoría de propiedad
    public function create()
    {
        return view('admin.property_categories.create');
    }

    // Guarda una nueva categoría de propiedad en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        PropertyCategory::create($request->all());

        return redirect()->route('admin.properties.index')->with('success', 'Category created successfully.');
    }

    // Muestra una categoría de propiedad específica
    public function show(PropertyCategory $propertyCategory)
    {
        return view('admin.property_categories.show', compact('propertyCategory'));
    }

    // Muestra el formulario para editar una categoría de propiedad específica
    public function edit(PropertyCategory $propertyCategory)
    {
        //return view('admin.property_categories.edit', compact('propertyCategory'));
    }

    // Actualiza una categoría de propiedad específica en la base de datos
    public function update(Request $request, PropertyCategory $propertyCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $propertyCategory->update($request->all());

        return redirect()->route('admin.properties.index')->with('success', 'Category updated successfully.');
    }

    // Elimina una categoría de propiedad específica de la base de datos
    public function destroy(PropertyCategory $propertyCategory)
    {
        $propertyCategory->delete();
        return redirect()->route('admin.properties.index')->with('success', 'Category deleted successfully.');
    }
}
