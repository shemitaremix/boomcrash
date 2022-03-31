<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;

class PostController extends Controller
{
    /**
     * Muestra todos las publicaciones generadas
     * 
     * @return view 
     */
    public function index(){
        $posts = Post::where('status',2)->latest('id')->get();
        return view('index', compact('posts'));
    }

    /**
     * Muestra una publicacion en especifico
     * 
     * @param int $id
     * 
     */
    public function show(Post $post){
        $similares = Post::where('category_id',$post->category_id)->where('status',2)->where('id','!=',$post->id)->latest('id')->get();    
        return view('post', compact('post','similares'));
    }

   
}
