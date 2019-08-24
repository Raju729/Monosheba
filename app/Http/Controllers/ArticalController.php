<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Psychiatric;
use App\UserQuestion;
use App\Post;
use DB;
use App\Http\Resources\Article as ArticleResource;
class ArticalController extends Controller
{
    public function index()
    {
        if(!$_GET){
            $data['error']=101;
            $data['message']="Error Occured !";
            echo json_encode($data);
            exit();
        }else{
            $method= $_GET['method'];
            if($method=='search_name'){
                if(isset($_GET['city']) && isset($_GET['speciality'])){
                    $this->show();
                }
                else{
                    $data['error']=101;
                    $data['message']="Error Occured !";
                    echo json_encode($data);
                    exit();
                }

            }
            else if($method=='search_psychiatrist')
            {
                if(isset($_GET['city']) && isset($_GET['speciality']) && isset($_GET['name'])){
                    $this->show_psy();
                }
                else{
                    $data['error']=101;
                    $data['message']="Error Occured !";
                    echo json_encode($data);
                    exit();
                }


            }
            else if($method=='scale')
            {
                if(isset($_GET['scale'])){
                    $this->scale();
                }else{
                    $data['error']=101;
                    $data['message']="Error Occured !";
                    echo json_encode($data);
                    exit();
                }

            }
            else if($method=='ask'){
                if(isset($_GET['question'])){
                    $this->ask_monosheba();
                }else{
                    $data['error']=101;
                    $data['message']="Error Occured !";
                    echo json_encode($data);
                    exit();
                }
            }
            else if($method=='show_question'){
                $this->question_stream();
            }
            else if($method=='show_comment'){
                if(isset($_GET['id'])){
                    $this->show_comment();
                }else{
                    $data['error']=101;
                    $data['message']="Error Occured !";
                    echo json_encode($data);
                    exit();
                }
            }
            else if($method=='blog')
            {
                $this->show_blog();
            }
            else{
                $this->destroy();
            }
        }


    }

    public function show_blog(){
        $data['result']=DB::table('posts') ->get();
        $data['sucess']='100';
        echo json_encode($data);
        exit();
    }

    public function show()
    {
        $city= $_GET['city'];
        $speciality= $_GET['speciality'];

        if($city && $speciality){
            $data['result']=DB::table('psychiatrics')
                ->where('city',$city)
                ->where('speciality',$speciality)
                ->get();
            if($data['result']->isEmpty()){
                $data['error']=102;
                $data['message']="No Psychiatrict Found";
                echo json_encode($data);
                exit();
            }
            else{
                $data['sucess']=100;
                echo json_encode($data);
                exit();
            }
        }
        else{
            $data['error']=101;
            $data['message']="Error Occured !";
            echo json_encode($data);
            exit();
        }
    }

    public function show_psy()
    {
        $city= $_GET['city'];
        $speciality= $_GET['speciality'];
        $name= $_GET['name'];

        if($city && $speciality && $name){
            $data['result']=DB::table('psychiatrics')
                ->where('city',$city)
                ->where('speciality',$speciality)
                ->where('name',$name)
                ->get();
            if($data['result']->isEmpty()){
                $data['error']=102;
                $data['message']="No Psychiatrict Found";
                echo json_encode($data);
                exit();
            }
            else{
                $data['sucess']=100;
                echo json_encode($data);
                exit();
            }
        }
        else{
            $data['error']=101;
            $data['message']="Error Occured !";
            echo json_encode($data);
            exit();
        }
    }

    public function scale(){
        $scale= $_GET['scale'];
        if($scale){
            $data['result']= DB::table('questions')
                        ->where('scale',$scale)
                        ->select('question')
                        ->get();
            if($data['result']->isEmpty()){
                $data['error']="102";
                $data['message']="No Scale Found";
                echo json_encode($data);
                exit();

            }
            else{
                $data['sucess']='100';
                echo json_encode( $data);
                exit();
            }
        }
        else{
            $data['error']=101;
            $data['message']="Error Occured !";
            echo json_encode($data);
            exit();
        }

    }


    public function  question_stream(){
        $data['result']=UserQuestion::orderBy('id', 'DESC')
            ->whereNotNull('answer')
            ->get();
        if($data['result']->isEmpty()){
            $data['error']="102";
            $data['message']="No Question Found";
            echo json_encode($data);
            exit();

        }
        else{
            $data['sucess']='100';
            echo json_encode( $data);
            exit();
        }
    }

    public function show_comment(){
        $question_id= $_GET['id'];
        if($question_id){
            $data['ans'] = UserQuestion::find($question_id);
            $data['comment']=DB::table('user_comments')->where('question_id',$question_id)->get();
            $data['qsn']=UserQuestion::orderBy('id', 'DESC')
                ->whereNotNull('answer')
                ->take(9)
                ->get();

            $data['sucess']=100;
            echo json_encode($data);
            exit();

        }
        else{
            $data['error']=101;
            $data['message']="Error Occured !";
            echo json_encode($data);
            exit();
        }
    }

    public function ask_monosheba(){
        $question= $_GET['question'];
        if($question){
            $allqsn=UserQuestion::all();
            $c=count($allqsn);
            $id=str_pad($c,3,'0',STR_PAD_LEFT);
            $qsn['qsn_id']='QSN-33'.$id;
            $qsn['question']=$question;
            DB::table('user_questions')->insert($qsn);
            $data['sucess']='100';
            echo json_encode( $data);
            exit();
        }else{
            $data['error']=101;
            $data['message']="Error Occured !";
            echo json_encode($data);
            exit();
        }

    }

    public function destroy()
    {
        $data['error']=101;
        $data['message']="Error Occured !";
        echo json_encode($data);
        exit();
    }
}
