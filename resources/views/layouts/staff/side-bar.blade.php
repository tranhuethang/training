<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('img/user1-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Timesheet Management</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN TASK</li>
            <li>
                <a href="{{ route('getListTimesheet') }}">
                    <i class="fa fa-envelope"></i> <span>Timesheet Management</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>

            <li>
                <a href="{{ route('getMail') }}">
                    <i class="fa fa-envelope"></i> <span>Send Mail</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
</aside>