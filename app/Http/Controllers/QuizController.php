<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public $quiz;
    public function addQuiz()
    {
        return view('admin.quiz.add-quiz', [
            'categories' => Category::all()
        ]);
    }

    public function saveQuiz(Request $request)
    {
        $this->quiz = new Quiz();
        $this->quiz->question = $request->question;
        $this->quiz->cat_id = $request->qcat;
        $this->quiz->option_1 = $request->opt1;
        $this->quiz->option_2 = $request->opt2;
        $this->quiz->option_3 = $request->opt3;
        $this->quiz->option_4 = $request->opt4;
        $this->quiz->answer = $request->answer;
        $this->quiz->status = $request->status;
        $this->quiz->save();
        return back()->with('success', 'Quiz has been added successfully!');
    }

    public function manageQuiz(){

        $this->quiz = DB::table('quizzes')
            ->join('categories', 'quizzes.cat_id', '=', 'categories.id')
            ->select('quizzes.*', 'categories.cat_name')
            ->get();
        return view('admin.quiz.manage-quiz', [
            'quizzes' => $this->quiz
        ]);
    }
    public function deleteQuiz($id){
        $this->quiz = Quiz::find($id);
        $this->quiz->delete();
        return back()->with('success', 'Quiz has been deleted successfully!');
    }
}
