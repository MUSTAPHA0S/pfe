<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    private $currentQuestionIndex = 0;
    private $question;

    public function __construct()
    {
        $this->question = Quiz::all();
    }

    public function showQuestion(Request $request)
    {
        $question = $this->question[$this->currentQuestionIndex];
        return view('quiz', compact('question'));
    }

    public function checkAnswer(Request $request)
    {
        $question = $this->question[$this->currentQuestionIndex];
        $correctAnswer = $question->correct_answer;

        $answer = $request->input('answer');
        $isCorrect = $answer === $correctAnswer;

        $this->currentQuestionIndex++;

        if ($this->currentQuestionIndex >= count($this->question)) {
            return view('quiz_complete');
        } else {
            $nextQuestion = $this->question [$this->currentQuestionIndex];
            return view('quiz', compact('nextQuestion', 'isCorrect'));
        }
    }
}