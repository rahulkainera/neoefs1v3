<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;

use App\Http\Requests;
use App\Mutualfund;
use App\Customer;

class MutualfundController extends Controller
{
    public function index()
    {
        //
        $mutualfunds=mutualfund::all();
        return view('mutualfunds.index',compact('mutualfunds'));
    }

    public function show($id)
    {

        $mutualfund = mutualfund::findOrFail($id);

        return view('mutualfunds.show',compact('mutualfund'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('mutualfunds.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'acquired_value' => 'required',
            'acquired_date'=>'required',
            'recent_value' => 'required',
            'recent_date'=>'required',
        ]);
        $mutualfund= new mutualfund($request->all());
        $mutualfund->save();

        return redirect('mutualfunds');
    }

    public function edit($id)
    {
        $mutualfund=mutualfund::find($id);
        return view('mutualfunds.edit',compact('mutualfund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $mutualfund= new Mutualfund($request->all());
        $mutualfund=Mutualfund::find($id);
        $mutualfund->update($request->all());
        return redirect('mutualfunds');
    }

    public function destroy($id)
    {
        mutualfund::find($id)->delete();
        return redirect('mutualfunds');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
