<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use App\UserQuestion;
use DB;
use App\Psychiatric;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        $data['posts']=count(Post::all());
        $data['qsn']=count(UserQuestion::all());
        $data['psy']=count(Psychiatric::all());
        $data['contact']=count(Contact::all());
        return view('Admin.dashboard',$data);
    }

    public function login(){
        return view('Admin.login');
    }
    public function contact()
    {
        $contact=Contact::all();
        return view('Admin.Contact.contact_msg',compact('contact'))->with('no', 1);
    }
    public function contact_view($id){
        $result = DB::table('contacts')->where('id',$id)->first();
        echo json_encode($result);

    }

    public function contact_delect($id){
        DB::table('contacts')->where('id','=',$id)->delete();
        $data['message']="Sucess";
        echo json_encode($data);
    }

}
