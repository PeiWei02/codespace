<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Question;
use App\Models\Option;
use App\Models\user_answer;
use Illuminate\Support\Facades\Log;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $quizzes = Quiz::all();
        return view('quiz.index', ['quizzes' => $quizzes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(auth()->user()->id);
        // dd(auth()->user());
        $quiz = Quiz::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('success', 'Quiz created successfully');

        return redirect()->route('quiz.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        return view('quiz.show', ['quiz' => $quiz]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }

    public function createQuestion(Quiz $quiz)
    {
        return view('quizzes.createQuestion', ['quiz' => $quiz]);
    }

    public function storeQuestion(Request $request, Quiz $quiz)
    {
        // $question = $quiz->questions()->create([
        //     'question' => $request->question,
        //     session()->flash('success', 'Question created successfully')
        // ]);

        $question = new Question();
        $question->quiz_id = $quiz->id;
        $question->question_text = $request->question_text;
        $question->save();

        // foreach($request->answers as $key => $answer) {
        //     $is_correct = false;
        //     if($key == $request->correct_answer) {
        //         $is_correct = true;
        //     }
        //     $question->answers()->create([
        //         'answer_text' => $answer,
        //         'is_correct' => $is_correct
        //     ]);
        // }


        // loop through the options from the request and create them
        foreach ($request->options as $option_text) {
            $option = new Option;
            $option->question_id = $question->id;
            $option->option_text = $option_text;
            // assuming you send a 'correct' field in the request for the correct option
            $option->is_correct = $option_text == $request->correct ? true : false;
            $option->save();
        }
        return redirect()->route('quiz.index');
    }

    // public function submitAnswers(Request $request, Quiz $quiz){

    //     // loop through the submitted answers and store them
    //     foreach($request->answers as $question_id => $answer_id) {
    //         $answer = new user_answer;
    //         $answer = auth()->user()->id;
    //         $answer->question_id = $question_id;
    //         $answer->option_id = $answer_id;
    //         $answer->save();
    //     }
    //     return redirect()->route('quizzes.results', ['quiz' => $quiz]);
    // }

    public function answer(Quiz $quiz)
    {
        $quiz->load('questions.options');
        return view('quiz.answer', ['quiz' => $quiz]);
    }

    public function submit(Request $request, Quiz $quiz){

        Log::info('Submit method was called',$request->all());
    
        $score = 0;
        $userAnswers = $request->except('_token');
    
        // Check if $userAnswers is not null before using it in foreach
        if ($userAnswers) {
            // loop through the submitted answers and check them
            foreach($userAnswers as $question_id => $answer_id){
                $is_correct = Option::where([
                    'question_id' => str_replace('question', '', $question_id),
                    'id' => $answer_id,
                    'is_correct' => true
                ])->exists();
    
                if($is_correct){
                    $score++;
                }
            }
        }
    
        return redirect()->route('quiz.result', ['quiz' => $quiz, 'score' => $score]);
    }
    
    

    public function result(Quiz $quiz, $score){
        return view('quiz.result', ['quiz' => $quiz, 'score' => $score]);
    }
}
