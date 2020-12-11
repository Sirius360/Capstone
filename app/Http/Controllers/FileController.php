<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function img_upload(Request $request){
        print_r ($request);
        echo 'abc';
        

    }
}
