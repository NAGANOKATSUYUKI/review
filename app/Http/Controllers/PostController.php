<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $hensu1)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view("posts/index")->with(["hensu1" => $hensu1->getPaginateByLimit(1)]);
    }
    
    public function show(Post $hensu4)
    {
        //dd($hensu4);
        return view("posts/show")->with(["hensu4"=> $hensu4]);
    }
}
