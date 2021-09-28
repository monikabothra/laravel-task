<?php

namespace App\Http\Controllers;

use App\address;
use App\customer;
use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = address::with('customer')->get();
        // dd($data);
        return view('address.index',[
            'data'=>$data]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = customer::all();
        
        return view('address.create',
        [
            'customer'=> $customer
        ]
        );
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
            'customer_id'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'address3'=>'required',
        ]);
        $address = new address;
        $address->customer_id = request('customer_id');
        
        $address->address1 = request('address1');
        $address->address2 = request('address2');
        $address->address3 = request('address3');
        $address->customer->address1 = request('address1');
        $address->customer->address2 = request('address2');
        $address->customer->address3 = request('address3');
        $address->customer->address_id = request('id');

        
        $address->save();
        $address->customer->save();

        return redirect('address');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(address $address)
    {
        $customer = customer::all();

        return view('address.edit', compact('address','customer'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(address $address)
    {
        request()->validate([
            'customer_id'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'address3'=>'required',
        ]);
        // dd($address->customer->mobile);
        // dd($request);
        $address->customer_id = request('customer_id');
        
        $address->address1 = request('address1');
        $address->address2 = request('address2');
        $address->address3 = request('address3');
        $address->customer->address1 = request('address1');
        $address->customer->address2 = request('address2');
        $address->customer->address3 = request('address3');
        $address->customer->address_id = $address->id;

        $address->save();
        $address->customer->save();

        // dd($address->customer);

        return redirect('address');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(address $address)
    {
        $address->delete();
        return redirect('customer');

    }
}
