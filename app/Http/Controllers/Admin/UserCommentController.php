<?php

namespace App\Http\Controllers;

use App\UserComment;
use Illuminate\Http\Request;
use DB;
class UserCommentController extends Controller
{
   public function index(){
       $comment['comment'] = DB::table('user_questions')
           ->Join('user_comments', 'question_id', '=', 'user_questions.id')
           ->select('user_comments.id','user_comments.name','user_comments.comment', 'user_questions.qsn_id')
           ->get();
       return view('Admin.UserComment.show',$comment)->with('no',1);

   }

    public function destroy($id){
        $data=UserComment::find($id);
        $data->delete();
        $data['message']="Sucess";
        echo json_encode($data);

    }

}
