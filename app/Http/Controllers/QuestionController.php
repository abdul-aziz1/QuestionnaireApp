<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire)
    {
        return view('question.create', compact('questionnaire'));
    }

    public function store(Questionnaire $questionnaire)
    {
        //dd( request()->all() );
        $data = request()->validate([
            'question.question' => 'required',
            'answares.*.answare' => 'required',
        ]);

        $question = $questionnaire->questions()->create($data['question']);
        $question->answares()->createMany($data['answares']);
        //dd($data);
        return redirect('/questionnaires/'.$questionnaire->id);
    }
}
