<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use DB;
class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        return view('Admin.Question.add');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Question.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        question::create($request->all());
        return $this->show();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['question']= DB::table('questions')->get();
        return view('Admin.Question.details',$data)->with('no', 1);
    }

    public function show_edit($id)
    {
        $data['questions']=DB::table('questions')->where('id',$id)->first();
        return view('Admin.Question.edit',$data);
    }

    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $psychiatric=question::find($request->id);
        $psychiatric->scale=$request->scale;
        $psychiatric->question=$request->question;
        $psychiatric->save();
        return $this->show();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('questions')->where('id','=',$id)->delete();
        $data['message']="Sucess";
        echo json_encode($data);
    }
}
