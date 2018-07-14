<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\Post;
use Input;


class PostController extends Controller
{
    //
   public function index()
   {
     $post = new Post();
     return $post->createEntry();
   }

   public function confirm_img(Request $req)
   {

header('X-XSS-Protection: 0');
      $data = $req->all();
      return view('confirm_img', ['img' => $data['img_code']]);
   }



}
