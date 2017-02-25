<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Stock;
use App\Customer;
use Illuminate\Auth\Middleware\Authenticate;

class StockController extends Controller
{
    public function index()
    {
        //
        $stocks=Stock::all();
        return view('stocks.index',compact('stocks'));
    }

    public function show($id)
    {

        $stock = Stock::findOrFail($id);

        return view('stocks.show',compact('stock'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('stocks.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'symbol' => 'required',
            'name' => 'required',
            'shares'=>'required',
            'purchased'=>'required',
        ]);
        $stock= new Stock($request->all());
        $stock->save();

        return redirect('stocks');
    }

    public function edit($id)
    {
        $stock=Stock::find($id);
        return view('stocks.edit',compact('stock'));
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
        $stock= new Stock($request->all());
        $stock=Stock::find($id);
        $stock->update($request->all());
        return redirect('stocks');
    }

    public function destroy($id)
    {
        Stock::find($id)->delete();
        return redirect('stocks');
    }
    public function stringify($id)
    {
        // $investment=investment::where('id', $id)->select('customer_id','category','description','acquired_value','acquired_date','recent_value','recent_date')->first();
        $customer = Customer::where('cust_number', $id)->select('cust_number','name')->first();

        $customer = $customer->toArray();
        return response()->json($customer);

    }
    public function stringify1($id)
    {
        // $investment=investment::where('id', $id)->select('customer_id','category','description','acquired_value','acquired_date','recent_value','recent_date')->first();

        $stock=stock::where('symbol', $id)->select('symbol','name','shares','purchase_price','purchased')->first();

        $stock = $stock->toArray();
        return response()->json($stock);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
