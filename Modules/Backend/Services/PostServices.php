<?php

namespace Modules\Backend\Services;

use Illuminate\Http\Request;
use Modules\Backend\Contracts\PostContract;

class PostServices{
    
    protected $post;

    public function __construct(PostContract $post)
    {
        $this->post = $post;
    }

    public function index(){
        return $this->post->all();
    }

    public function store(Request $request){

        $collection = collect($request->all())->only(['title','description']);

        return $this->post->store($collection->all());
    }

}
