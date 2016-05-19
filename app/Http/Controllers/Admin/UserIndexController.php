<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserIndexController extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index()
    {
    	# code...
    	$name = 'xuechao';
        $breadcrumb = '用户管理';
    	return view('admin/user',compact('name','breadcrumb'));
    }
}
