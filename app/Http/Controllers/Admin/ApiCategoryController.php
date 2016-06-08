<?php

namespace App\Http\Controllers\Admin;

use App\Models\Api;
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
//		$treeDataSource = array('id'=>'-1','text'=>'接口树','children'=>array());
//		$treeDataSource['children'] = $this->generateCategoryTree(new ApiCategory(),'0');
//    	return response()->json($treeDataSource);
		$id = $request->get('id') ?  $request->get('id') : 0;
		return json_encode($this->generateCategoryTree(new ApiCategory(),$id));
    }

	public function getCategoryRelation(Request $request){
		$id = $request->get('id');
		$rootCode = substr($id,0,4);
		$apiCategory = new ApiCategory();
		$currentNode = $apiCategory->where('category_code',$id)->get()->first();
		$parentNode = strlen($id) == 4 ? $currentNode : $apiCategory->where('category_code',$currentNode->p_category_code)->get()->first();
		$rootNode = strlen($id) == 4 ? $currentNode : $apiCategory->where('category_code',$rootCode)->get()->first();

		$tmp1 = $currentNode->category_code;
		return json_encode(array('currentId'=>$currentNode->category_code,'currentText'=>$currentNode->category_name,'parentText'=>$parentNode->category_name,'rootText'=>$rootNode->category_name));
	}

	public function saveCategory(){
		$categoryText = $_GET['currentPath'];
		$categoryCode = $_GET['currentId'];
		$apiCategory = new ApiCategory();
		$apiCategory = $apiCategory->where('category_code',$categoryCode)->get()->first();
		$apiCategory->category_name = $categoryText;
		$apiCategory->save();
		$breadcrumb = '接口管理';
		return view('admin/apiManager',compact('breadcrumb'));
	}

	private function generateCategoryTree($apiCategory , $pCategoryCode){
		$treeDataSource = array();
		$categoryList = $apiCategory->where('p_category_code',$pCategoryCode)->get();

		foreach ($categoryList as $key => $category){
			$categoryCode = $category->category_code;

			$node = array();
			$node['id'] = $categoryCode;
			$node['text'] = $category->category_name;
//			$children = $this->generateCategoryTree($apiCategory,$categoryCode);
			$tmp1 = $apiCategory->where('p_category_code',$categoryCode)->count();
			$node['state'] = $tmp1 ? 'closed' : 'open';
			array_push($treeDataSource,$node);
		}

		return $treeDataSource;
	}


}
