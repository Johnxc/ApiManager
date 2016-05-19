<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FieldsController extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index()
    {
    	# code...
    	$name = 'xuechao';
        $breadcrumb = '数据字典';
    	return view('admin/fields',compact('name','breadcrumb'));
    }
}
