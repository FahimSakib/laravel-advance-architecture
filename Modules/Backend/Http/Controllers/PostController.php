<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Http\Requests\PostRequest;
use Modules\Backend\Services\PostServices;

class PostController extends Controller
{
    protected $post;

    public function __construct(PostServices $post)
    {
        $this->post = $post;
    }

   

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $posts = $this->post->index();
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
       
        // dd($collection->all());
        $result = $this->post->store($request);
        
        if($result){
            return redirect('post')->with('success','data Saved successfully');
        }else{
            return redirect('post')->with('error','data can not save');
        }
    }

}
