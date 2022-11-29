<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface{

    public function all(){
        return Post::all();
    }
     public function store($data){
        Post::create($data);
     }
     public function update($data,$id){
        $post =Post::where('id',$id)->first();


     }
     public function destroy($id){
        $post= Post::where('id',$id)->first();
        $post->delete();
     }
    
}