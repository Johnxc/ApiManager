@extends('admin.layouts.master')

@section('admin-content')
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="step-content pos-rel">
            <div class="step-pane active" data-step="1">


                <form class="form-horizontal" id="sample-form">
                    <h3 class="lighter block green">接口基本信息</h3>
                    <div class="form-group has-success">
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
                    <div class="form-group has-success">
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
                    <div class="form-group has-success">
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
                    <div class="form-group has-success">
                        <label for="apiDesc" class="col-xs-12 col-sm-3 control-label no-padding-right">
                            接口描述
                        </label>
                        <div class="col-xs-12 col-sm-5">
                            <textarea id="apiDesc" rows="2" style="max-width:510px;" class="form-control"></textarea>
                        </div>
                        <div class="help-block col-xs-12 col-sm-reset inline"> Success tip help!</div>
                    </div>

                    <h3 class="lighter block green">Http Header</h3>
                    <div class="form-group">
                        <div class="col-sm-9 col-xs-12 col-sm-offset-3 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">&nbsp;key&nbsp;</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                                <div class="input-group-addon">value</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-xs-12 col-sm-offset-3 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">&nbsp;key&nbsp;</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                                <div class="input-group-addon">value</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>

                    <h3 class="lighter block green">Parameter</h3>
                    <div class="form-group">
                        <div class="col-sm-11 col-xs-12 col-sm-offset-1 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">name</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">type</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">isNeed</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">desc</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-11 col-xs-12 col-sm-offset-1 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">name</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">type</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">isNeed</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">desc</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-11 col-xs-12 col-sm-offset-1 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">name</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">type</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">isNeed</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">desc</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-11 col-xs-12 col-sm-offset-1 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">name</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">type</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">isNeed</div>
                                <input type="text" class="form-control">
                                <div class="input-group-addon">desc</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>

                    <h3 class="lighter block green">Return</h3>
                    <div class="form-group has-success">
                        <label for="apiReturn" class="col-xs-12 col-sm-3 control-label no-padding-left">
                            返回值
                        </label>
                        <div class="col-xs-12 col-sm-9">
                            <textarea id="apiReturn" rows="6" style="max-width:510px;" class="form-control"></textarea>
                        </div>
                    </div>

                    <h3 class="lighter block green">Error Codes</h3>
                    <div class="form-group">
                        <div class="col-sm-9 col-xs-12 col-sm-offset-3 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">&nbsp;code&nbsp;</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                                <div class="input-group-addon">desc</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-xs-12 col-sm-offset-3 form-inline">
                            <div class="input-group">
                                <div class="input-group-addon">&nbsp;code&nbsp;</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                                <div class="input-group-addon">desc</div>
                                <input type="text" class="form-control" placeholder="this input will be autoload">
                            </div>
                            <div class="input-group fc-button-group">
                                <input class="btn btn-sm btn-white" type="button" value="Add">
                                <input class="btn btn-sm btn-white" type="button" value="Del">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div><!-- /.col -->
@endsection