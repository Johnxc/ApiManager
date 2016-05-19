<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminIndexController extends Controller
{
	public function __construct()
    {
        
    }

    //
    public function index()
    {
    	# code...
    	$name = 'xuechao';
        $breadcrumb = '接口管理';

        

    	return view('admin/home',compact('name','breadcrumb'));
    }
}
