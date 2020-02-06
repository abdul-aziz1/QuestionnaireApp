<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {

        $post = \DB::table('post')->where('slug', $slug)->first();

        return view('test.post', [
         'post' => $post
        ]);

    }
}
