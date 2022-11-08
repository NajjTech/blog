<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="{{ url('admin/dashboard') }}"><span>SMSBangladesh</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{url('admin/dashboard')}}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">    &nbsp;  Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->


        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-users tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Team</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/new_dev')}}" class="nav-link"> New Member</a></li>
            <li class="nav-item"><a href="{{url('admin/manage_dev')}}" class="nav-link"> Manage Member</a></li>
            
        </ul>

        <a href="{{url('/admin/price')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-tag tx-22"></i>
                <ion-icon name="bug"></ion-icon>
                <span class="menu-item-label">    &nbsp;   Pricing</span>

            </div>
        </a>
        

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-list-alt tx-24"></i>
                <span class="menu-item-label">    &nbsp;    Blog</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
        </a>
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{url('admin/new_blog')}}" class="nav-link"> New Blog</a></li>
            <li class="nav-item"><a href="{{url('admin/manage_blog')}}" class="nav-link"> Manage Blog</a></li>
            
        </ul>

    </div><!-- br-sideleft-menu -->

    

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->