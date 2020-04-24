<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    public function master() {
        return view('master');
    }

    public function template($id){
        return view('master');
    }

}
