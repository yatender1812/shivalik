<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function add_customer(){
        return view('add_customer');

    }
    public function show(Request $request){
        $name=$request->name;
        $customer = DB::table('customer')
    ->select('customerName', 'status', 'address')
    ->where('customerName', $name)
    ->first();
        
        $data['products'] = $customer;
        return view('show', $data);
       

    }

    //
}
