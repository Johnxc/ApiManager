<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserIndexController extends Controller
{
    //
    public function __construct()
    {
        
    }

    public function index()
    {
    	# code...
    	$name = 'xuechao';
        $breadcrumb = '用户管理';
    	return view('admin/user',compact('name','breadcrumb'));
    }

    public function getUserList(Request $request){
        $rows = $request->get('rows');
        $page = $request->get('page');
        $sortField = $request->get('sidx') ? $request->get('sidx') : 'id';

        $gridData = array();
        $userModel = new User();
        $userModelAll = $userModel->all();
        $gridData['rows'] = $userModel->orderBy($sortField,$request->get('sord'))->take($rows)->offset( ($request->get('page') - 1) * $rows )->get();
        $gridData['page'] = $request->get('page');
        $gridData['total'] = ceil( $userModelAll->count() / $rows );
        $gridData['records'] = $userModelAll->count();
        return response()->json($gridData);
    }
}
