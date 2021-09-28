<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\address;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = new customer;
        $result = $data::paginate(5);
        return view('customer.index',['data'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'mobile'=>'required|digits:10',
            'email'=>'required|email',
            'password'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'address3'=>'required',
        ]);
        $data = new customer;
        $data->name = request('name');
        $data->mobile = request('mobile');
        $data->email = request('email');
        $data->password = request('password');
        $data->address1 = request('address1');
        $data->address2 = request('address2');
        $data->address3 = request('address3');
        // dd($data);

        $data->save();
        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        // dd($address);
        return view('customer.edit', compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(customer $customer)
    {
        // dd('called');
        // dd($customer);

        // $data = customer::findOrFail($customer);
        request()->validate([
            'name'=>'required|string',
            'mobile'=>'required|digits:10',
            'email'=>'required|email',
            'password'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'address3'=>'required',
        ]);
        $address = address::find($customer->address_id);

        // dd($address);

        $customer->name = request('name');
        $customer->mobile = request('mobile');
        $customer->email = request('email');
        $customer->password = request('password');
        $customer->address1 = request('address1');
        $customer->address2 = request('address2');
        $customer->address3 = request('address3');
        $address->customer_id=$customer->id;
        $address->address1 = request('address1');
        $address->address2 = request('address2');
        $address->address3 = request('address3');
        // dd($customer->address_id);

        // dd($customer);

        $customer->save();
        $address->save();
        return redirect('customer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
       
        $customer->delete();
        return redirect('customer');

    }
}
