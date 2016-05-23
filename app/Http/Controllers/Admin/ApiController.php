<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index(){

    }

    public function show(){

    }

    public function create(){
        $breadcrumb = '新建接口';
        return view('admin/createApi',compact('breadcrumb'));
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
