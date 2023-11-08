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

    public function delete(Request $r)
    {
        $idPost = 4;
        $post = Post::find($idPost);

        //Exclusao em massa
        // $post = Post::all()->delete();               // retorna collection (não funciona exclusão)
        // $post = Post::where('id', '>', 0)->delete(); // retorna uma instancia dos models (Pode ser feita exclusão)

        if ($post)
            return $post->delete(); // retorna o numero de registros excluidos;


        return "Não existe nenhum post com id = " . $idPost;
    }
}
