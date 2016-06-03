<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ErrorCode;

class ErrorCodesController extends SimpleController
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
        return parent::getList($request,new ErrorCode());
    }

    public function saveField(Request $request){
        if($request->get('oper') == 'del'){
            $errorCode = ErrorCode::find($request->get('id'));
            $errorCode->delete();
        }else{
            if($request->get('id') == '_empty'){
                $errorCode = new ErrorCode();
            }else{
                $errorCode = ErrorCode::find($request->get('id'));
            }
            $errorCode->error_code = $request->get('error_code');
            $errorCode->error_desc = $request->get('error_desc');
            $errorCode->save();
            return response()->json($errorCode);
        }
    }
}

