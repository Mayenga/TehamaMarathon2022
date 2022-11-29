<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Customers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

use Session;

class CustomersController extends Controller
{
    public function index(){
        return view('customer.register');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cityregion' => 'required',
            'gender' => 'required',
            'distance' => 'required',
            'tsize' => 'required'
        ]);
        $storecustomer = Customers::create(['fullname' => $request->name,'phone' => $request->phone,'email' => $request->email,'cityregion' => $request->cityregion,'gender' => $request->gender,'distance' => $request->distance,'tshirtsize' => $request->tsize]);
        // if ($exception instanceof \PDOException) {
        //     return Redirect::back()->with('msg', 'The Message');
        // }
        Session::flash('message', 'You have successfully registered for Tehama Marathon 2022!');
        return redirect('/payments')->with( ['name' => $request->name] );
    }
}