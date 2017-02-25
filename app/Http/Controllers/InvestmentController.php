<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate;

use App\Http\Requests;
use App\Investment;
use App\Customer;

class InvestmentController extends Controller
{
    public function index()
    {
        //
        $investments=investment::all();
        return view('investments.index',compact('investments'));
    }

    public function show($id)
    {

        $investment = investment::findOrFail($id);

        return view('investments.show',compact('investment'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('investments.create', compact('customers'));
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
        $investment= new investment($request->all());
        $investment->save();

        return redirect('investments');
    }

    public function edit($id)
    {
        $investment=Investment::find($id);
        return view('investments.edit',compact('investment'));
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
        $investment= new Investment($request->all());
        $investment=Investment::find($id);
        $investment->update($request->all());
        return redirect('investments');
    }

    public function destroy($id)
    {
        Investment::find($id)->delete();
        return redirect('investments');
    }
    public function stringify($id)
    {
        // $investment=investment::where('id', $id)->select('customer_id','category','description','acquired_value','acquired_date','recent_value','recent_date')->first();
        $investment=investment::where('cust_number', $id)->select('cust_number','category','description','acquired_value','acquired_date','recent_value','recent_date')->first();

        $investment = $investment->toArray();
        return response()->json($investment);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
