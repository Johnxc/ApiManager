<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ErrorCode;

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

    public function getErrorCodeList(Request $request){
        $rows = $request->get('rows');
        $page = $request->get('page');
        $sortField = $request->get('sidx') ? $request->get('sidx') : 'id';

        $gridData = array();
        $errorCodeModel = new ErrorCode();
        $errorCodeModelAll = $errorCodeModel->all();
        $gridData['rows'] = $errorCodeModel->orderBy($sortField,$request->get('sord'))->take($rows)->offset( ($request->get('page') - 1) * $rows )->get();
        $gridData['page'] = $request->get('page');
        $gridData['total'] = ceil( $errorCodeModelAll->count() / $rows );
        $gridData['records'] = $errorCodeModelAll->count();
        return response()->json($gridData);
    }
}

