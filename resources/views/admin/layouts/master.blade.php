<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin - ApiManager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- basic styles -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="{{ asset('css/font-awesome-ie7.min.css') }}" />
        <![endif]-->


        <!--[if !IE]> -->

        <script src="{{ asset('scripts/jquery-2.0.3.min.js' ) }}"></script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script src="{{ asset('scripts/jquery-1.10.2.min.js') }}"></script>
        <![endif]-->

        <!--[if !IE]> -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='{{ asset('scripts/jquery-2.0.3.min.js') }}'>"+"<"+"script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
        </script>
        <![endif]-->

        <script src="{{ asset('scripts/bootstrap.min.js') }}"></script>
        <script src="{{ asset('scripts/typeahead-bs2.min.js') }}"></script>

        <script src="{{ asset('scripts/fuelux/fuelux.tree.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/fuelux/data/fuelux.tree-sampledata.js') }}" type="text/javascript"></script>


        <!-- page specific plugin styles -->

        <!-- fonts -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

        <!-- ace styles -->

        <link rel="stylesheet" href="{{ asset('css/ace.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/ace-rtl.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/ace-skins.min.css') }}" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="{{ asset('css/ace-ie.min.css') }}" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->

        <script src="{{ asset('scripts/ace-extra.min.js') }}"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src="{{ asset('scripts/html5shiv.js') }}"></script>
        <script src="{{ asset('scripts/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body>
        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="icon-leaf"></i>
                            ApiManager
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <span class="user-info">
                                    <small>欢迎光临,</small>
                                    Jason
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="icon-off"></i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>
                @include('admin.layouts.slidebar')

                <div class="main-content">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home home-icon"></i>
                                <a href="#">首页</a>
                            </li>
                            <li class="active">{{ $breadcrumb }}</li>
                        </ul><!-- .breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                {{ $breadcrumb }}
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                    @yield('admin-content')
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div><!-- /.main-content -->

                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="icon-cog bigger-150"></i>
                    </div>

                    <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="default" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; 选择皮肤</span>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                            <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                            <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                            <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                            <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                            <label class="lbl" for="ace-settings-add-container">
                                切换窄屏
                                <b></b>
                            </label>
                        </div>
                    </div>
                </div><!-- /#ace-settings-container -->
            </div><!-- /.main-container-inner -->

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="icon-double-angle-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->


        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
        </script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->

        <script src="{{ asset('scripts/jquery-ui-1.10.3.custom.min.js') }}"></script>
        <script src="{{ asset('scripts/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{ asset('scripts/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('scripts/jquery.easy-pie-chart.min.js') }}"></script>
        <script src="{{ asset('scripts/jquery.sparkline.min.js') }}"></script>


        <!-- ace scripts -->

        <script src="{{ asset('scripts/ace-elements.min.js') }}"></script>
        <script src="{{ asset('scripts/ace.min.js') }}"></script>

        <!-- inline scripts related to this page -->
</body>
</html>

