<div class="sidebar" id="sidebar">
    <script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <ul class="nav nav-list">
        <li @if($breadcrumb == '首页')class="active"@endif>
            <a href="{{ route('admin::admin.home')}}">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> Home </span>
            </a>
            <b class="arrow"></b>
        </li>
        <li @if($breadcrumb == '接口管理' || $breadcrumb == '新建接口')class="active open"@endif>
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> 接口管理 </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <ul class="submenu">
                <li @if($breadcrumb == '接口管理')class="active"@endif>
                    <a href="{{ route('admin::admin.apiManager') }}">
                        <i class="icon-double-angle-right"></i>
                        接口管理
                    </a>
                </li>

                <li @if($breadcrumb == '新建接口')class="active"@endif>
                    <a href="{{ route('admin::admin.createApi') }}">
                        <i class="icon-double-angle-right"></i>
                        新建接口
                    </a>
                </li>
            </ul>
        </li>
        <li @if($breadcrumb == '用户管理')class="active"@endif>
            <a href="{{ route('admin::admin.user.index')}}">
                <i class="icon-text-width"></i>
                <span class="menu-text"> 用户管理 </span>
            </a>
        </li>
        <li @if($breadcrumb == '数据字典')class="active"@endif>
            <a href="{{ route('admin::admin.fields.index')}}">
                <i class="icon-text-width"></i>
                <span class="menu-text"> 数据字典 </span>
            </a>
        </li>
        <li @if($breadcrumb == '错误码')class="active"@endif>
            <a href="{{ route('admin::admin.errorCodes.index')}}">
                <i class="icon-text-width"></i>
                <span class="menu-text"> 错误码 </span>
            </a>
        </li>
        <li @if($breadcrumb == 'HTTP Header')class="active"@endif>
            <a href="{{ route('admin::admin.httpHeader.index')}}">
                <i class="icon-text-width"></i>
                <span class="menu-text"> HTTP Header </span>
            </a>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <script type="text/javascript">
    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>