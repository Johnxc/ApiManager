@extends('admin.layouts.master')
@section('admin-content')
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="step-content pos-rel">
            <div class="step-pane active" data-step="1">


                <form class="form-horizontal" id="sample-form">
                    <h3 class="lighter block green">接口基本信息</h3>
                    <div class="form-group">
                        <label for="apiCode" class="col-xs-12 col-sm-3 control-label no-padding-right">
                            接口编号
                        </label>
                        <div class="col-xs-12 col-sm-5">
                            <span class="block input-icon input-icon-right">
                                <input readonly="" type="text" id="apiCode" class="width-100"/>
								<i class="ace-icon fa fa-check-circle"></i>
                            </span>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline"> Success tip help!</div>
                    </div>
                    <div class="form-group">
                        <label for="apiName" class="col-xs-12 col-sm-3 control-label no-padding-right">
                            接口名称
                        </label>
                        <div class="col-xs-12 col-sm-5">
                            <span class="block input-icon input-icon-right">
                                <input type="text" id="apiName" class="width-100"/>
								<i class="ace-icon fa fa-check-circle"></i>
                            </span>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline"> Success tip help!</div>
                    </div>
                    <div class="form-group">
                        <label for="apiUrl" class="col-xs-12 col-sm-3 control-label no-padding-right">
                            调用地址
                        </label>
                        <div class="col-xs-12 col-sm-5">
                            <span class="block input-icon input-icon-right">
                                <input type="text" id="apiUrl" class="width-100"/>
								<i class="ace-icon fa fa-check-circle"></i>
                            </span>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline"> Success tip help!</div>
                    </div>
                    <div class="form-group">
                        <label for="apiDesc" class="col-xs-12 col-sm-3 control-label no-padding-right">
                            接口描述
                        </label>
                        <div class="col-xs-12 col-sm-5">
                            <textarea id="apiDesc" rows="2" style="max-width:680px;resize:none;width:680px" class="form-control"></textarea>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline"> Success tip help!</div>
                    </div>

                    <h3 class="lighter block green">请求头</h3>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 control-label no-padding-right">
                            HTTP Header Key
                        </label>
                        <div class="input-group col-xs-12 col-sm-5 groupInputBehind">
                            <input type="text" name="hhKey" class="width-100" />
                            <span class="input-group-addon"></span>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline">
                            <i class="ace-icon fa fa-plus" style="cursor: pointer;"></i>
                            <i class="ace-icon fa fa-minus" style="cursor: pointer;margin-left:5px"></i>
                        </div>
                    </div>

                    <h3 class="lighter block green">参数列表</h3>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 control-label no-padding-right">
                            Parameter Name
                        </label>
                        <div class="input-group col-xs-12 col-sm-5 groupInputBehind">
                            <input type="text" name="parameter" class="width-100" />
                            <span class="input-group-addon"></span>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline">
                            <i class="ace-icon fa fa-plus" style="cursor: pointer;"></i>
                            <i class="ace-icon fa fa-minus" style="cursor: pointer;margin-left:5px"></i>
                        </div>
                    </div>

                    <h3 class="lighter block green">返回值</h3>
                    <div class="form-group">
                        <label for="apiReturn" class="col-xs-12 col-sm-3 control-label no-padding-left">
                            返回值
                        </label>
                        <div class="col-xs-12 col-sm-9">
                            <textarea id="apiReturn" rows="6" style="max-width:680px;resize:none;height:150px;width:680px;" class="form-control"></textarea>
                        </div>
                    </div>

                    <h3 class="lighter block green">错误码</h3>
                    <div class="form-group">
                        <label class="col-xs-12 col-sm-3 control-label no-padding-right">
                            HTTP Header Key
                        </label>
                        <div class="input-group col-xs-12 col-sm-5 groupInputBehind">
                            <input type="text" name="hhKey" class="width-100" />
                            <span class="input-group-addon"></span>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline">
                            <i class="ace-icon fa fa-plus" style="cursor: pointer;"></i>
                            <i class="ace-icon fa fa-minus" style="cursor: pointer;margin-left:5px"></i>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div><!-- /.col -->
@endsection
