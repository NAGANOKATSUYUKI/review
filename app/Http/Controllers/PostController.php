<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $hensu1)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $hensu1->get();//$postの中身を戻り値にする。
    }
}
