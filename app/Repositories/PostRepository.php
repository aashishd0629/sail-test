<?php

namespace app\Repositories;

use app\Models\Post;
use app\Repositories\Interfaces\PostRepositoryInterface;

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