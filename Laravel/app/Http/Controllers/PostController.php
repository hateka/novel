<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\Post;
use Input;


class PostController extends Controller
{
   private $post_data = '';

   public function __construct(Request $req) {
      $this->post_data = $req->all();
   }


   public function index(Request $req)
   {
     header('X-XSS-Protection: 0');
     $post = new Post();
     return $post->createEntry($this->post_data);
   }

   public function confirm_img(Request $req)
   {

      header('X-XSS-Protection: 0');
      return view('confirm_img', ['img' => $this->post_data['img_code']]);
   }



}
