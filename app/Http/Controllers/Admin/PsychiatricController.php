<?php

namespace App\Http\Controllers;

use App\Psychiatric;
use Illuminate\Http\Request;
use DB;

class PsychiatricController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['$psychiatrict']="active";
        $data['city']= DB::table('cities')->get();
        return view('Admin.Psychiatric.add',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        psychiatric::create($request->all());
        return $this->show();
    }

    public function show()
    {
        $data['$psychiatrict']="active";
        $data['psychiatric']= DB::table('psychiatrics')->get();
        return view('Admin.Psychiatric.show',$data)->with('no', 1);
    }


    public function show_edit($id)
    {
        $data['$psychiatrict']="active";
        $data['city']= DB::table('cities')->get();
        $data['psychiatric']=DB::table('psychiatrics')->where('id',$id)->first();
        return view('Admin.Psychiatric.edit',$data);
    }

    public function edit(Psychiatric $hospital)
    {
        //
    }

    public function update(Request $request)
    {
        $psychiatric=psychiatric::find($request->id);
        $psychiatric->name=$request->city;
        $psychiatric->name=$request->name;
        $psychiatric->phone_no=$request->phone_no;
        $psychiatric->speciality=$request->speciality;
        $psychiatric->designation=$request->designation;
        $psychiatric->joblocation=$request->joblocation;
        $psychiatric->save();
        return $this->show();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Psychiatric  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('psychiatrics')->where('id','=',$id)->delete();
        $data['message']="Sucess";
        echo json_encode($data);
    }
}
