<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerContact extends Controller
{
    public function index(){
        $customers = Customer::latest()->get();
        return view('admin.customerContact.index',compact('customers'));
    }
}
