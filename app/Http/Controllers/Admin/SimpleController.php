<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SimpleController extends Controller
{
    protected function getList(Request $request,$model){
        $rows = $request->get('rows');
        $page = $request->get('page');
        $sortField = $request->get('sidx') ? $request->get('sidx') : 'id';
        $filters = $request->get('filters') ? json_decode($request->get('filters'),true) : false;

        $gridData = array();
        $modelAll = $model->all();

        if($filters){
            $op = $filters['groupOp'];
            foreach ($filters['rules'] as $rule) {
                if($op == 'AND'){
                    $model = $model->where($rule['field'],$this->changeOp($rule['op']),$rule['data']);
                }else{
                    $model = $model->orWhere($rule['field'],$this->changeOp($rule['op']),$rule['data']);
                }

            }
        }

        $gridData['rows'] = $model->orderBy($sortField,$request->get('sord'))->take($rows)->offset( ($request->get('page') - 1) * $rows )->get();
        $gridData['page'] = $request->get('page');
        $gridData['total'] = ceil( $modelAll->count() / $rows );
        $gridData['records'] = $modelAll->count();
        return response()->json($gridData);
    }
}
