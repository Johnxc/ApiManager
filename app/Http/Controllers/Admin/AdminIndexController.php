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
        $breadcrumb = '首页';
    	return view('admin/home',compact('breadcrumb'));
    }
}
