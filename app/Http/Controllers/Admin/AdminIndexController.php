<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ApiCategory;

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

        $categoryList = ApiCategory::all();
        

    	return view('admin/home',compact('name','breadcrumb','categoryList'));
    }
}
