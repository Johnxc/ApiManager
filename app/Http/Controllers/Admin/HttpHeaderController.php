<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\HttpHeader;

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

    public function getHttpHeaderList(Request $request){
        $rows = $request->get('rows');
        $page = $request->get('page');
        $sortField = $request->get('sidx') ? $request->get('sidx') : 'id';

        $gridData = array();
        $httpHeaderModel = new HttpHeader();
        $httpHeaderModelAll = $httpHeaderModel->all();
        $gridData['rows'] = $httpHeaderModel->orderBy($sortField,$request->get('sord'))->take($rows)->offset( ($request->get('page') - 1) * $rows )->get();
        $gridData['page'] = $request->get('page');
        $gridData['total'] = ceil( $httpHeaderModelAll->count() / $rows );
        $gridData['records'] = $httpHeaderModelAll->count();
        return response()->json($gridData);
    }
}
