<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ApiCategory;

class ApiCategoryController extends Controller
{
    //
    public function __construct(){

    }

    public function index(){
		$breadcrumb = '接口管理';
		return view('admin/apiManager',compact('breadcrumb'));
    }

    public function show(){
    	
    }

    public function getApiCategory(Request $request){
		$treeDataSource = array('id'=>'-1','text'=>'接口树','children'=>array());
		$treeDataSource['children'] = $this->generateCategoryTree(new ApiCategory(),'0');
    	return response()->json($treeDataSource);
    }

	private function generateCategoryTree($apiCategory , $pCategoryCode){
		$treeDataSource = array();

		$categoryList = $apiCategory->where('p_category_code',$pCategoryCode)->get();

		foreach ($categoryList as $key => $category){
			$categoryCode = $category->category_code;
			$treeDataSource['id'] = $category->category_code;
			$children = $this->generateCategoryTree($apiCategory,$categoryCode);
			$treeDataSource['text'] = $category->category_name;
			$treeDataSource['children'] = $children;
		}

		return $treeDataSource;
	}
}
