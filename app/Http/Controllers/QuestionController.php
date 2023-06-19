<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Quiz $quiz)
    {
        return view('quiz.createQuestion', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Quiz $quiz)
    {
        // dd($request->all());
        // $question = Question::create([
        //     'question_text' => $request->question_text,
        //     'quiz_id' => $quiz->id,
        // ]);

        // $options = $request->option_text;
        // $correct = $request->is_correct;

        $question = $quiz->questions()->create([
            'question' => $request->question,
        ]);

        foreach ($request->options as $option) {
            $question->options()->create([
                'option_text' => $option['text'],
                'is_correct' => isset($option['is_correct']),
            ]);
        }

        return redirect()->route('quiz.question.show', ['quiz' => $quiz, 'question' => $question]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz, Question $question)
    {
        return view('quiz.showQuestion', compact('quiz', 'question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz, Question $question)
    {
        $question->delete();
        return redirect()->route('quiz.question.show');
    }
}
