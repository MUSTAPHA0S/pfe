@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Question {{ $question->id }}</h1>
        <p>{{ $question->text }}</p>

        @if (isset($isCorrect))
            @if ($isCorrect)
                <p class="text-success">Correct!</p>
            @else
                <p class="text-danger">Incorrect. The correct answer is "{{ $question->correct_answer }}".</p>
            @endif
        @endif

        <form method="post" action="{{ route('quiz.checkAnswer') }}">
            @csrf
            <div class="form-group">
                <label for="answer">Answer:</label>
                <input type="text" class="form-control" id="answer" name="answer">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
