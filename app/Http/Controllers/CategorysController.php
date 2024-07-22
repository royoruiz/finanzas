<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorysRequest;
use App\Http\Requests\UpdateCategorysRequest;
use App\Models\Categorys;


class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categorys::all();

        return view('admin/category')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // Assuming 'category', 'scope', and 'subcategory' are the correct column names in your categories table.
        Categorys::create([
            'category' => 'New Category',
            'scope' => 'New Scope',
            'subcategory' => 'New Subcategory',
        ]);

        // Redirect to the categories list with a success message, or handle as needed.
        return redirect()->route('admin.category')->with('success', 'Category created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorysRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorys $categorys)
    {
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorys $categorys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorysRequest $request, Categorys $categorys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorys $categorys)
    {
        //
    }
}
