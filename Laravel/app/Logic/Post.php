<?php

namespace App\Logic;

use DB;


class Post
{

 public function createEntry()
 {

var_dump(uniqid());

   $user_id = 222;
   $user_data = DB::table('users')->where('user_id', '=' , $user_id)->get();

   if (empty(count($user_data))) {

      DB::table('users')->insert(
       [
       'name'=>'test',
       'user_id' => $user_id
       ]
      );

      DB::table('text')->insert(
       [
       'user_id' => $user_id,
       'text' => 'test2!!'
       ]
      );
 
      DB::table('img')->insert(
       [
       'user_id' => $user_id,
       'code' => 'ssssss'
       ]
      );
    }
   echo 'hello';
 } 


}


