<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="align-left" style="padding: 10px 20px;">
            <img src="{{url('logo.png')}}" style="height: 40px" />
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
        
        <nav class="nav">

        <div class="dropdown">

            
            <!-- end: if statement -->
          <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
            
            <div class="media-list">
             
             
            
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
         
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{Auth::user()->name}}</span>
                    <img class="rounded-circle" width="32px" src="{{url('admin.png')}}">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="{{url('logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>
    </div><!-- br-header-right -->
</div><!-- br-header -->