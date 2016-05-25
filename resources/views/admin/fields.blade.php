@extends('admin.layouts.master')

@section('admin-content')
    <script>
        var grid_data = '<?php echo $gridData ?>';
        console.log(grid_data);
    </script>
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <table id="grid-table"></table>

        <div id="grid-pager"></div>

        <!-- PAGE CONTENT ENDS -->
    </div>
@endsection
