<?php

namespace App\Http\Controllers;

use App\Models\CommercialEndeavors;
use Illuminate\Http\Request;


class CommercialEndeavorsController extends Controller
{
    //

    function index()
    {
        $contents = CommercialEndeavors::all();

        return view('admin.commercial-endeavors.index', compact('contents'));
    }
}
