<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        view('home'); 
    }


    public function store(Request $request)
    {

        Home::create([
            'name'   => $request->name,
            'email' => $request->email
        ]);

        return back()->with('success','Category has been Saved.');

    }




}
