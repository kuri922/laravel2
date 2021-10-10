<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index( ){
        return view('index');
    }

    public function result(Request $request ){
        $number=$request->number;
         if($number<=50) {
             $msg='頑張りましょう';
             return view('hello.result',['msg'=>$msg]);

         }else if($number<=80) {
            $msg='よくできました';
            return view('hello.result',['msg'=>$msg]);

         }else if($number<=100) {
            $msg='大変よくできました';
            return view('hello.result',['msg'=>$msg]);
         }else {
            $msg='０〜１００を入力してください';
            return view('hello.result',['msg'=>$msg]);
         }
    }
}
