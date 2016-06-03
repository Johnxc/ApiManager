<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Field;

class FieldsController extends SimpleController
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
        return parent::getList($request,new Field());
    }

    public function saveField(Request $request){
        if($request->get('oper') == 'del'){
            $fieldModel = Field::find($request->get('id'));
            $fieldModel->delete();
        }else{
            if($request->get('id') == '_empty'){
                $fieldModel = new Field();
            }else{
                $fieldModel = Field::find($request->get('id'));
            }
            $fieldModel->field_code = $request->get('field_code');
            $fieldModel->field_type = $request->get('field_type');
            $fieldModel->field_default = $request->get('field_default');
            $fieldModel->field_desc = $request->get('field_desc');
            $fieldModel->save();
            return response()->json($fieldModel);
        }
    }
}
