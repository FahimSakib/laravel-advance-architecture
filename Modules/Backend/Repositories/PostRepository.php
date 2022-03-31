<?php

namespace Modules\Backend\Repositories;

use Modules\Backend\Entities\Post;
use Modules\Backend\Contracts\PostContract;

class PostRepository implements PostContract{

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function all($column=array('*'),string $orderBy='id', string $sortBy='desc'){
        return $this->post->orderBy($orderBy,$sortBy)->get($column);
    }

    public function store(array $param){
        return $this->post->create($param);
    }
}