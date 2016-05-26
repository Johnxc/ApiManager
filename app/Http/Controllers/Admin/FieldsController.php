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
    	$name = 'xuechao';
        $breadcrumb = '数据字典';
        $fieldModel = new Field();
    	return view('admin/fields',compact('name','breadcrumb'));
    }

    public function getFieldList(Request $request){
        $rows = $request->get('rows');
        $page = $request->get('page');
        $sortField = $request->get('sidx') ? $request->get('sidx') : 'id';

        $gridData = array();
        $fieldModel = new Field();
        $fieldModelAll = $fieldModel->all();
        $gridData['rows'] = $fieldModel->orderBy($sortField,$request->get('sord'))->take($rows)->offset( ($request->get('page') - 1) * $rows )->get();
        $gridData['page'] = $request->get('page');
        $gridData['total'] = ceil( $fieldModelAll->count() / $rows );
        $gridData['records'] = $fieldModelAll->count();
        return response()->json($gridData);
    }
}
