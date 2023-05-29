<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Supplier;
use App\Product;
use App\Brand;


class OrderController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LIST
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $orders = Order::get();
        return view('orders.index')->with('orders', $orders);
    }

    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */
    public function create()
    {
        $brands = Brand::pluck('name', 'id');
        $suppliers = Supplier::pluck('name', 'id');
        $products = Product::pluck('name', 'id');
        return view('orders.create', compact('brands', 'suppliers', 'products'));
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required',
            'product_id' => 'required',
            'brand_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $order = new Order();
        $order->supplier_id = $request->input('supplier_id');
        $order->product_id = $request->input('product_id');
        $order->brand_id = $request->input('brand_id');
        $order->quantity = $request->input('quantity');
        $order->price = $request->input('price');
        $order->save();
        return redirect()->route('orders.index')->with('info', '¡Se creó la orden de compra!');
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $order = Order::find($id);
        $brands = Brand::pluck('name', 'id');
        $suppliers = Supplier::pluck('name', 'id');
        $products = Product::pluck('name', 'id');
        return view('orders.edit', compact('order', 'brands', 'suppliers', 'products'));
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->supplier_id = $request->input('supplier_id');
        $order->product_id = $request->input('product_id');
        $order->brand_id = $request->input('brand_id');
        $order->quantity = $request->input('quantity');
        $order->price = $request->input('price');
        $order->save();
        return redirect()->route('orders.index')->with('info', '¡Se actualizaron los datos de la orden de compra!');
    }

    /*
    |--------------------------------------------------------------------------
    | SHOW
    |--------------------------------------------------------------------------
    */
    public function show($id)
    {
        $order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('orders.index')->with('info', '¡Se eliminaron los datos de la orden de compra!');
    }
}
