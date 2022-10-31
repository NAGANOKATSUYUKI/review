<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $hensu1)//インポートしたPostをインスタンス化して$postとして使用。
    {
        
        return view("posts/index")->with(["hensu1" => $hensu1->getPaginateByLimit(5)]);
    }
    
    public function show(Post $hensu4)
    {
        //dd($hensu4);
        return view("posts/show")->with(["hensu4"=> $hensu4]);
    }
    
    public function create()
    {
        return view("posts/create");
    }
    
    public function store(PostRequest $request, Post $hensu6)
    {
        $input = $request[ "post" ];
        $hensu6->fill($input)->save();
        return redirect("/URL-1/". $hensu6->id );
    }
    
    public function edit(Post $hensu5)
    {
        return view("posts/edit")->with([ "hensu5" => $hensu5]);
    }
    
    public function update(PostRequest $request, Post $hensu7)
    {
        $input_post = $request[ "post"];
        $hensu7->fill($input_post)->save();
        return redirect("/URL-1/" . $hensu7->id);
    }
}
