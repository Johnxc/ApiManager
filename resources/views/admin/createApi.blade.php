@extends('admin.layouts.master')

@section('admin-content')
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="apiCode"> 接口编号 </label>

                <div class="col-sm-9">
                    <input readonly="" type="text" id="apiCode" name="apiCode" placeholder="接口编号由系统自动生成" class="col-xs-10 col-sm-5"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="apiName"> 接口名称 </label>

                <div class="col-sm-9">
                    <input type="text" id="apiName" placeholder="接口名称" name="apiCode" class="col-xs-10 col-sm-5"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="apiUrl"> 请求地址 </label>

                <div class="col-sm-9">
                    <input type="text" id="apiUrl" name="apiUrl" placeholder="请求地址" class="col-xs-10 col-sm-5"/>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="apiDesc"> 描述 </label>

                <div class="col-sm-9">
                    <textarea id="apiDesc" name="apiDesc" class="autosize-transition form-control"></textarea>
                </div>
            </div>

            <div class="space-4"></div>
        </form>
    </div><!-- /.col -->
@endsection