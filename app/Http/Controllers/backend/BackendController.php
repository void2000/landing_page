<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\template;

class BackendController extends Controller
{
    public function master() {
        $data['tem'] = template::paginate(6);
        return view('master',$data);
    }

    public function template($id){
        $data['tem'] =template::find($id)->where('id_cate',$id)->paginate(6);
        return view('master',$data);
    }

    // add teamplate
     public function add_template() {
         return view('');
     }

}
