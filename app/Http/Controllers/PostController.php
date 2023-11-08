<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // no futuro vai só exibir um form

        $newPost = [
            'title' => 'Teste',
            'content' => ' Conteudo do segundo post',
            'author' => 'Laura Legal Dadosa'
        ];

        $post  = new Post($newPost);

        $post->save();
        return $post;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // no futuro receberá um post com um novo recurso
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = New Post();
        $post = $post ->find($id); // busca pela chave primaria

        return($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $posts = Post::find($id)->update([
            'author' => 'Maria Betania'
        ]);

        return $posts;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $post = Post::find($id)->delete();
        return $post;
        //Exclusao em massa
        // $post = Post::all()->delete();               // retorna collection (não funciona exclusão)
        // $post = Post::where('id', '>', 0)->delete(); // retorna uma instancia dos models (Pode ser feita exclusão)
    }
}
