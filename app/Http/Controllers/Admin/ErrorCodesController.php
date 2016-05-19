<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ErrorCodesController extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index()
    {
    	# code...
    	$name = 'xuechao';
        $breadcrumb = '错误码';
    	return view('admin/errorCodes',compact('name','breadcrumb'));
    }
}

