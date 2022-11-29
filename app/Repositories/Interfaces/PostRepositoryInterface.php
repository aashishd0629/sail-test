<?php

namespace app\Repositories\Interfaces;

interface PostRepositoryInterface{

    public function all();
    public function store($data);
    public function update($data,$id);
    public function destroy($id);
}