<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\Post;

class PostController extends Controller
{
    //
   public function index()
   {
     $post = new Post();
     return $post->createEntry();
   }

}
