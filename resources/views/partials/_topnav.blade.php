<div class="top_nav">
    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="/images/img.jpg" alt="">{{auth()->user()->name}}
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            
                            <li><a href="{{url('/logout')}}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>