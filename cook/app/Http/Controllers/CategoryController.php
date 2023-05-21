<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::orderBy('id','DESC')->get();
        return view('backend.category.index',['categories'=>$category]);

    }

    public function create()
    {
        return view('backend.category.create');
    }


    public function store(Request $request)
    {
        Category::create([
            'name' => $request->category_name,
            'status'=> $request->status
        ]);
        return back()->with('success','Category has been saved.');
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit',['category'=>$category]);
    }


    public function update(Request $request, $id)
    {
        Category::find($id)->update([
            'name' => $request->category_name,
            'status'=> $request->status
        ]);
        return back()->with('success','Category has been Updated.');
    }



    public function delete($id)
    {
        Category::find($id)->delete();
        return back()->with('success','Category has been Remove.');
    }




}
