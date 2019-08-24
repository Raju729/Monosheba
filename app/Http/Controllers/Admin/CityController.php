<?php

namespace App\Http\Controllers;

use App\City;
use DB;
use Illuminate\Http\Request;
class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['citymenu']="active";
        $data['city']= DB::table('cities')->get();
        return view('Admin.City.city',$data)->with('no', 1);
    }

    public function store(Request $request)
    {
        city::create($request->all());
        return redirect()->back();
    }

    public function show($id)
    {
        $result = DB::table('cities')->where('id',$id)->first();
        echo json_encode($result->name);

    }

    public function edit(Request $request)
    {
       $city=city::find($request->id);
        $city->name=$request->name;
        $city->save();
        return redirect()->back();

    }

    public function destroy($id)
    {
        DB::table('cities')->where('id','=',$id)->delete();
        $data['message']="Sucess";
        echo json_encode($data);
    }
}
