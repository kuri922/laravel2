<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
  
    public function index(Request $request)
    {
        if($request <= 50) {
            return view('posts.send');
    }



}
}