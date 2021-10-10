<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index( ){
        return view('index');
    }

    public function sum(Request $request ){
        $sum=$request->sum;
        // $deta=  ('１から' +$sum +' の合計値は');
        $msg='１から'+$sum+'までの合計値は';
     
        $num=1;
        $total=0;
        while ($num <=$sum) {
            $total+=$num;
            $num++;
        }
    
        return view('hello.sum',$total,['msg'=>$msg]);
}
}
