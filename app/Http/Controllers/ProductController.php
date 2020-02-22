<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Route;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product=Product::all();
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('product.creat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
                $request->validate([
                    'product_name'=>'required|Alpha',
                    'product_details'=>'required|Alpha',
                    'stock'=>'required|numeric'
                ]);
                
                $contact = new Product([
                'product_name' => $request->get('product_name'),
                'product_details' => $request->get('product_details'),
                'stock' => $request->get('stock'),
                ]);
                $contact->save();
                

            return redirect()->route('pro.index')->with('success', 'product saved!');
          }
        catch(Exception $e){
            return redirect()->route('pro.index')->with('error',$e->getMessage());
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit=Product::find($id);
        return view('product.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'product_name'=>'required',
            'product_details'=>'required',
            'stock'=>'required'
        ]);
        try{
                 $product = product::find($id);
                $product->product_name =  $request->get('product_name');
                $product->product_details = $request->get('product_details');
                $product->stock = $request->get('stock');
                $product->save();
                return redirect()->route('pro.index')->with('success', 'Product updated!');

        }
        catch(Exception $e)
        {
            return redirect()->route('pro.index')->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try
        {
            $product=Product::find($id);
            $product->delete();
            return redirect()->route('pro.index')->with('success','product delete');
        }
        catch(Exception $e)
        {
            return redirect()->route('pro.index')->with('error',$e->getMessage());
        }
    }
}
