<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;

class UsersController extends Controller
{
    public function index(Request $request){



        $result = DB::table('users')->first();
        if($result){

         // Session::put('last_name',$result->last_name);
         Session::put('name',$result->name);
        // Session::put('id',$result->id);




        }



     //    echo'<pre>';
     //    print_r ($result);
     //    echo'<\pre>';


        return view('users.home');
    }
}
