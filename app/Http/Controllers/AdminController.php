<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

use App\Models\AboutUs;


class AdminController extends Controller
{
    public function index()
    {
        $recordAboutsUs = AboutUs::where('id', 1)->exists();

        return view('admin.index', compact('recordAboutsUs'));
        //return " All users are shown here";
    }
}
