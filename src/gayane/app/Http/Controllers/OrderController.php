<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        return Order::all();
    }
 
    public function show($id)
    {
        return Order::find($id);
    }

    public function store(Request $request)
    {
        return Order::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());

        return $order;
    }

    public function delete(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return 204;
    }
}
