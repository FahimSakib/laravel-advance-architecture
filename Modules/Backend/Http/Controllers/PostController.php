<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Contracts\PostContract;
use Modules\Backend\Entities\Post;
use Modules\Backend\Http\Requests\PostRequest;

class PostController extends Controller
{
    protected $post;

    public function __construct(PostContract $post)
    {
        $this->post = $post;
    }



    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $posts = $this->post->all();
        return view('backend::index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('backend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(PostRequest $request)
    {
        $collection = collect($request->all())->only(['title','description']);
        // dd($collection->all());
        $result = $this->post->store($collection->all());
        
        if($result){
            return back()->with('success','data Saved successfully');
        }else{
            return back()->with('error','data can not save');
        }
    }

}
