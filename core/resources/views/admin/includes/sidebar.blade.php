<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
        <li>
            <a href="#sm_base" data-toggle="collapse">
                <i class="fa fa-fw fa-globe"></i> Website Settings
            </a>
            <ul id="sm_base" class="list-unstyled collapse">
                <li><a href="{{route('admin.basicSettings')}}"> <i class="fa fa-fw fa-cog"> </i> Basic Settings</a></li>
                <li><a href="{{route('admin.SmsSettings')}}"><i class="fa fa-phone"> </i> SMS Settings</a></li>
                <li><a href="{{route('admin.emailSettings')}}"><i class="fa fa-envelope"> </i> Email Settings</a></li>

            </ul>
        </li>

</div>