<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public $quiz;

    public function index()
    {
        return view('client.home.index');
    }

    public function allCategory()
    {
        return view('client.category.categories', [
            'categories' => Category::all()
        ]);
    }

    public function getQuiz(Request $request)
    {
        $this->quiz = Quiz::where('cat_id', $request->cat_id)->get()->sortByDesc('id');
        return view('client.quiz.quiz', [
            'quizzes' => $this->quiz
        ]);
    }

    public function getRandomQuiz()
    {
        return view('client.quiz.quiz', [
            'quizzes' => Quiz::inRandomOrder()
                ->limit(5)
                ->get()
        ]);
    }
}
