<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postRepository;
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function index()
    {
       $posts= $this->postRepository->all();
       return $posts;
    }

    public function store(PostRequest $postRequest)
    {
        $this->postRepository->store($postRequest);
    }
    // public function update(Request $request,$id)
    // {
    // }
    // public function destroy($id)
    // {
    // }
}
