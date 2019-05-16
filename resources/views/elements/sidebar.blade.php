<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">

                    <?php
                    if (isset(Auth::user()->image)){
                        $image_url = URL::to('public/uploads/images/admins/'.Auth::user()->image);
                    }else{
                        $image_url = URL::to('public/img/no-image.png');
                    }
                    ?>

                    <span>
                        <img alt="image" class="img-circle" src="{{ $image_url }}" />
                    </span>

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs"> <strong class="font-bold">Abdullah al mamun</strong>
                            </span> <span class="text-muted text-xs block">Shop Manager<b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile</a></li>
                        <li><a href=""><i class="fa fa-shield" aria-hidden="true"></i> Change Password</a></li>
                        <li><a href=""><i class="fa fa-file-image-o" aria-hidden="true"></i> Change profile picture</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit()";>
                                <i class="fa fa-sign-out"></i> Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li class="@if (currentController() == 'DashboardController') {{ "active" }} @endif">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li class="@if (currentController() == 'PostsController') {{ "active" }} @endif">
                <a href="{{ route('posts.index') }}"><i class="fa fa-pie-chart"></i> <span class="nav-label">Posts</span> </a>
            </li>

        </ul>

    </div>
</nav>
