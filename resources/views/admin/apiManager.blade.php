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
                                <h4 class="lighter smaller">接口目录</h4>
                            </div>
                            <div class="btn-group col-sm-8" style="padding:5px;">
                                <button type="button" id="btnAddApiCategory" class="btn btn-sm btn-white pull-right">添加目录</button>
                                <button type="button" id="btnUpdateApiCategory" class="btn btn-sm btn-white pull-right">修改目录</button>
                                <button type="button" id="btnAddApi" class="btn btn-sm btn-white pull-right">添加接口</button>
                                <button type="button" id="btnEditApi" class="btn btn-sm btn-white pull-right">修改接口</button>
                            </div>

                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-8">
                                <div class="easyui-panel" style="padding:5px">
                                    <ul class="easyui-tree" id="apiCategoryTree"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="widget-box">
                        <div class="widget-header header-color-blue2">
                            <h4 class="lighter smaller">修改目录</h4>
                        </div>
                        <div class="widget-body" style="padding:20px;">
                            <form action="/admin/saveCategory" role="form">
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
                                        <input type="hidden" id="parentId" name="parentId" />
                                        <input type="text" id="parentPath" placeholder="上级目录" class="col-xs-10 col-sm-5" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-left" for="currentPath">当前目录</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" id="currentId" name="currentId" />
                                        <input type="text" id="currentPath" name="currentPath" placeholder="当前目录" class="col-xs-10 col-sm-5" />
                                    </div>
                                </div>
                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" type="submit">
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
                            </form>
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