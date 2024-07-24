<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    //

    public function index(Request $request)
    {
        $search = $request->query('search');

        $faqs = Faqs::query()
            ->when($search, function ($query, $search) {
                return $query->where('question', 'like', '%' . $search . '%')
                    ->orWhere('answer', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faqs::create($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ created successfully');
    }

    public function show(Faqs $faq)
    {
        return view('admin.faqs.show', compact('faq'));
    }

    public function edit(Faqs $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faqs $faq)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($request->all());

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully');
    }

    public function destroy(Faqs $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted successfully');
    }

    //get content FAQ to frontpage
    public function faq_info()
    {
        $data = Faqs::all();

        return view('faq', compact('data'));
    }
}
