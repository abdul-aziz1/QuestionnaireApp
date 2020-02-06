<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    //
    public function index(){

    }

    public function show($Id)
    {
        $article = Articles::find($Id);
        dd($article);
        return view('test.article', [ 'article' => $article ]);
    }
    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
