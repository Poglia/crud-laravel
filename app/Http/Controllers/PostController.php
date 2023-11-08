<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;


class PostController extends Controller
{
    public function create(Request $r)
    {
        $newPost = [
            'title' => 'Meu segundo post',
            'content' => ' Conteudo do segundo post',
            'author' => 'Laura Legal Dadosa'
        ];

        $post  = new Post($newPost);

        $post->save();
        dd($post);
    }

    public function read(Request $r)
    {
        $post = New Post();
        $post = $post ->find(1); // busca pela chave primaria

        return($post);

    }

    public function all(Request $r)
    {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $r)
    {
        $posts = Post::where('id', '>', 2)->update([
            'author' => 'Maria Betania'
        ]);
        // $post = Post::find(3);
        // $post->content = 'O pato pateta pulou do caneco pisou na galinha bateu no marreco';

        // $post->save();

        return $posts;
    }
}
