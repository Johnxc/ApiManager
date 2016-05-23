@extends('admin.layouts.master')

@section('admin-content')

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="widget-box">
                        <div class="widget-header header-color-blue2">
                            <div class="col-sm-4">
                                <h4 class="lighter smaller">Choose Categories</h4>
                            </div>
                            <div class="col-sm-8" style="padding:5px;">
                                <button type="button" id="btnapiList" class="btn btn-sm btn-white" disabled>添加目录</button>
                                <button type="button" id="btninvokeFormat" class="btn btn-sm btn-white" disabled>修改目录</button>
                                <button type="button" id="btninvokeFormat1" class="btn btn-sm btn-white">添加接口</button>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-8">
                                <div id="categoryTree" class="tree"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="widget-box">
                        <div class="widget-header header-color-blue2">
                            <h4 class="lighter smaller">Modify Categories</h4>
                        </div>
                        <div class="widget-body" style="padding:20px;">
                            <div class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-left" for="rootPath">根目录</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="rootPath" placeholder="根目录" class="col-xs-10 col-sm-5" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-left" for="parentPath">上级目录</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="parentPath" placeholder="上级目录" class="col-xs-10 col-sm-5" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-left" for="newPath">当前目录</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="newPath" placeholder="当前目录" class="col-xs-10 col-sm-5" />
                                    </div>
                                </div>
                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" type="button">
                                            <i class="icon-ok bigger-110"></i>
                                            Submit
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="icon-undo bigger-110"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        var $assets = "assets";//this will be used in fuelux.tree-sampledata.js
                    </script>

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
@endsection