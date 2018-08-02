<?php

namespace App\Logic;

use DB;


class Post
{

 public function createEntry($data)
 {
   $user_id = uniqid();
   $user_data = DB::table('users')->where('user_id', '=' , $user_id)->get();

var_dump($user_id);
var_dump($user_data);

   if (empty(count($user_data))) {

      DB::table('users')->insert(
       [
       'name'=> $data['name'],
       'user_id' => $user_id
       ]
      );

      DB::table('text')->insert(
       [
       'user_id' => $user_id,
       'text' => $data['text'] 
       ]
      );
 
      DB::table('img')->insert(
       [
       'user_id' => $user_id,
       'code' =>$data['code'] 
       ]
      );
    }
   echo 'hello';
 } 


}


