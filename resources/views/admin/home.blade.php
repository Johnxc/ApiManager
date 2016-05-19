@extends('admin.layouts.master')

@section('admin-content')
<div class="col-sm-6">
    <div class="widget-box">
        <div class="widget-header header-color-green2">
            <h4 class="lighter smaller">Browse Files</h4>
        </div>

        <div class="widget-body">
            <div class="widget-main padding-8">
                <div id="tree2" class="tree"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('#tree2').ace_tree({
            dataSource: treeDataSource2 ,
            loadingHTML:'<div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div>',
            'open-icon' : 'icon-folder-open',
            'close-icon' : 'icon-folder-close',
            'selectable' : false,
            'selected-icon' : null,
            'unselected-icon' : null
        });
    })
</script>
@endsection