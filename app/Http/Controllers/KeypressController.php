<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\keypress;

class KeypressController extends Controller
{
    public function index()
    {
        $keypress=keypress::all();
       // dd(keypress::all());
        return view('keypressindex',compact('keypress'));    
    }

    public function create()
    {
        //
        return  view('keypress');
    }

    public function store(Request $request)
    {
        //dd($request->except('_token'));
        keypress::updateorCreate(['keypress' => $request->get('keypress')],$request->except('_token'));
        
        
        return redirect()->route('keypress');
    }

    public function getdata(Request $request)
    {
        // return keypress::select(id)
        $res=keypress::where('keypress',$request->name)->first();
        return $res->id;

    }
    
    public function destroy($id)
    {
        //
            $product=keypress::find($id);
            $product->delete();
            return redirect()->route('index');
    }

    public function edit($id)
    {
        //
        $edit=keypress::find($id);
        return view('keypressedit',compact('edit'));
    }
    
    public function update(Request $request, $id)
   {
    
    $keypress = keypress::find($id);
    //keypress::updateorCreate(['keypress' => $request->get('keypress')],$request->except('_token'));
    $keypress->keypress =  $request->get('keypress');
    
    $keypress->save();
    return redirect()->route('index');
   }
}
