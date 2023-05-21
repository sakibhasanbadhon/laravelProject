<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Models\Information;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index()
    {

        $students = User::with('address','information')->orderBy('id','desc')->get();
        return view('personal_Info.index',['student'=>$students]);


    }


    public function create()
    {
        return view('personal_Info.create');

    }



    public function store(Request $request)
    {
        // dd($request);

        $user= User::create([
            'roll'=> $request->roll,
            'fname' => $request->firstName,
            'username' =>$request->username,
            'email' =>$request->email,
            'phone_no' =>$request->phone_number,
            'password' =>$request->password,
            'avatar' =>$request->avatar,
            'apply_date' =>$request->apply,
        ]);

        $address =  Address::create([
                'user_id' =>$user->id,
                'district' =>$request->district,
                'upazila' =>$request->upazila,
                'postal_code' =>$request->postalCode,
                'address' =>$request->address,
        ]);
        $information =  Information::create([
            'user_id' =>$user->id,
            'father_name' =>$request->fatherName,
            'mother_name' =>$request->motherName,
            'national_id' =>$request->nationalId,
            'gender' =>$request->gender,

        ]);
       //dd($user->id);
        //return $request->all();

        return 'save successfully.';

    }



}
