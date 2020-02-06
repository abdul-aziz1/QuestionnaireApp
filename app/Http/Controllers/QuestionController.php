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
       // dd( request()->all() );
        $data = request()->validate([
            'question.question' => 'required',
            'answares.*.answare' => 'required',
        ]);

        $question = $questionnaire->question()->create($data['question']);
        $question->answare()->createMany($data['answares']);
        //dd($data);
        return redirect('/questuonnaire/'.$questionnaire->id);
    }
}
