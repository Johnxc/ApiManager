<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HttpHeaderController extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index()
    {
    	# code...
    	$name = 'xuechao';
        $breadcrumb = 'HTTP Header';
    	return view('admin/httpHeader',compact('name','breadcrumb'));
    }
}
