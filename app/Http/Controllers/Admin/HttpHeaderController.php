<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\HttpHeader;

class HttpHeaderController  extends SimpleController
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

    public function getHttpHeaderList(Request $request){
        return parent::getList($request,new HttpHeader());
    }

    public function saveField(Request $request){
        if($request->get('oper') == 'del'){
            $httpHeader = HttpHeader::find($request->get('id'));
            $httpHeader->delete();
        }else{
            if($request->get('id') == '_empty'){
                $httpHeader = new HttpHeader();
            }else{
                $httpHeader = HttpHeader::find($request->get('id'));
            }
            $httpHeader->header_name = $request->get('header_name');
            $httpHeader->header_value = $request->get('header_value');
            $httpHeader->save();
            return response()->json($httpHeader);
        }
    }
}
