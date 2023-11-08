<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;


class PostController extends Controller
{
    public function create(Request $r)
    {
        $newPost = [
            'title' => 'Meu primeiro post',
            'content' => ' Conteudo do post',
            'author' => 'Pedro Poglia'
        ];

        $post  = new Post($newPost);

        $post->save();
        dd($post);
    }
}
