<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Certificate;
use App\Models\Comment;
use App\Models\Cybersecurity;
use App\Models\Grc;
use App\Models\International;
use App\Models\KSA;
use App\Models\Question;
use App\Models\AnswerQuestion;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function answer_to(Request $request)
    {
        AnswerQuestion::create($request->all());
        $id = '1';

         $question = Question::where('id',$request->question_id  + 1)->paginate(1);
         if (!$question) {
             return 'adfa';
         }

        $answer   = Answer::all();

        $data = Cybersecurity::findOrFail($id);
        $comments = Comment::where('cybersecurity_id','=',$id)->get();
         return view('front.cyberscurity.detials',[
             'item'=>$data,
             'comments' =>$comments,
             'questions' =>$question,
             'answers' =>$answer
            ]);

    }//end of answer_to

    public function index()
    {
        return view('front.index');
    }

    public function cyberPages($id)
    {
        $data = Cybersecurity::where('pages','=',$id)->get();

        return view('front.cyberscurity.index',['items'=>$data]);
    }

    public function cyberDetails($id)
    {
        $question = Question::where('cybersecurity_id','=',$id)->paginate(1);

        $answer   = Answer::all();

        $data = Cybersecurity::findOrFail($id);
        $comments = Comment::where('cybersecurity_id','=',$id)->get();
         return view('front.cyberscurity.detials',[
             'item'=>$data,
             'comments' =>$comments,
             'questions' =>$question,
             'answers' =>$answer
            ]);
    }
    public function grcPages($id)
    {
        $data = Grc::where('pages','=',$id)->get();

         return view('front.grc.index',['items'=>$data]);
    }
    public function certificate()
    {
        $data = Certificate::all();
        return view('front.certificate.index',['items'=>$data]);
    }
    public function international()
    {
        $data = International::all();
        return view('front.international.index',['items'=>$data]);
    }
    public function ksa()
    {
        $data = KSA::all();
        return view('front.ksa.index',['items'=>$data]);
    }

    public function addComment(Request $request)
    {
        $comment = new Comment();
        $comment ->comment = $request->input('comment');
        $comment ->user_id = $request->input('user_id');
        $comment ->grc_id = $request->input('grc_id');
        $comment ->cybersecurity_id = $request->input('cybersecurity_id');
        $comment->save();
        return redirect()->back();
    }

}//end o controller
