<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\garageregister;

class GarageregisterController extends Controller
{
    public function index()
    {
        return garageregister::all();
    }

    public function show(garageregister $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, garageregister $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(garageregister $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }

    public function admin_list($statusid,garageregister $garageregister){
        $sql = garageregister::where('status',$statusid)->get();
        return response()->json($sql, 200);
    }

    public function admin_edit($id,Request $request){
        $sql = garageregister::where('id',$id)->update(array(
            'description'=>$request->post('des'),
            'latitude'=>$request->post('lat'),
            'longitude'=>$request->post('long'),
            'status'=>'1'
        ));
        return response()->json($sql, 200);
    }

    public function admin_edit_re($id,$statusid){
        $sql = garageregister::where('id',$id)->update(array('status'=>$statusid));
        return response()->json($sql,201);
    }

}
