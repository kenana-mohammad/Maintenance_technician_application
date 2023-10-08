<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use App\Models\category;
use Illuminate\Http\Request;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $subcategory=new subcategory();
        $subcategory->name=$request->input('name');
        $subcategory->category_id=$request->input('category_id');
        $subcategory->save();
        return response()->json([
            'subcategory'=>$subcategory,
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subcategory $subcategory)
    {
        //
    }
}
