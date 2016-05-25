<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Field;

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
        $fieldModel = new Field();
        $gridData = $fieldModel->all();
        $result = json_encode($gridData);
    	return view('admin/fields',compact('name','breadcrumb','gridData'));
    }
}
