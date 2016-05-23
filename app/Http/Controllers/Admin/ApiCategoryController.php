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

    }

    public function show(){
    	
    }

    public function getApiCategory(Request $request){
		$response = $this->generateCategoryTree(new ApiCategory(),'0');
    	return response()->json($response);
    }

	private function generateCategoryTree($apiCategory , $pCategoryCode){
		$treeDataSource = array();

		$categoryList = $apiCategory->where('p_category_code',$pCategoryCode)->get();

		foreach ($categoryList as $key => $category){
			$categoryCode = $category->category_code;
			$treeDataSource[$categoryCode]['name'] = $category->category_name;
			$children = $this->generateCategoryTree($apiCategory,$categoryCode);
			$treeDataSource[$categoryCode]['type'] = empty($children) ? 'item' : 'folder';
			$treeDataSource[$categoryCode]['additionalParameters']['children'] = $children;
		}

		return $treeDataSource;
	}
}
