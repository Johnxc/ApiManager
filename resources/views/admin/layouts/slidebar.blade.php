<div class="sidebar" id="sidebar">
    <script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <ul class="nav nav-list">
        <li @if($breadcrumb == '接口管理')class="active"@endif>
            <a href="{{ route('admin::admin.home')}}">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 接口管理 </span>
            </a>
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

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>