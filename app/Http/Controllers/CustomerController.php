<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function registerView()
    {
        return view('customer.customerRegister');
    }

    public function registerSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:customers,email',
            'password' => 'required|confirmed|min:6',
        ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();

        Auth::guard('customer')->loginUsingId($customer->id);
        return redirect('/');
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect('/');
    }

    public function loginView()
    {
        return view('customer.customerLogin');
    }

    public function login(Request $request)
    {
        if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            Auth::guard('customer')->loginUsingId(Customer::where('email' , $request->email)->first()->id);
            return redirect('/');
        }
        else
        {
            return back();
        }
    }
}
