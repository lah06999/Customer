<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;



class CustomerController extends Controller
{
    public function index(){
      
      return view('customer');
    }

    public function store(Request $request)
    {
      dd($request->email);
    $customer = new Customer;
    $customer->email=$request->'email';
    $customer->password=$request->'password';
    $customer->address=$request->'address';
    $customer->city=$request->'city';
    $customer->state=$request->'state';
    $customer->zip=$request->'zip';
    $customer->save();
    }
}