<div class="header">
    <div class="pull-left">
        <div class="logo">
            <a href="{{url('/')}}"
            ><img
                    src="{{asset('images/custom/FHRILogo-1.png')}}" alt="logo"
                /></a>
        </div>
        <div class="hamburger sidebar-toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>

    <div class="pull-right p-r-15">
        <ul>
            <li class="header-icon dib">
                <a href="javascript:;"><i class="ti-search"></i></a>
            </li>
            <li class="header-icon dib">
                <i class="ti-bell"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Recent Notifications</span>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/3.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            5 members joined today
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/3.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            likes a photo of you
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/3.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            Hi Teddy, Just wanted to let you ...
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/3.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            Hi Teddy, Just wanted to let you ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib">
                <i class="ti-email"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">2 New Messages</span>
                        <a href="javascript:;"
                        ><i class="ti-pencil-alt pull-right"></i
                            ></a>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li class="notification-unread">
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/1.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            Hi Teddy, Just wanted to let you ...
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="notification-unread">
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/2.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            Hi Teddy, Just wanted to let you ...
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/3.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            Hi Teddy, Just wanted to let you ...
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img
                                        class="pull-left m-r-10 avatar-img"
                                        src="{{asset('images/avatar/2.jpg')}}"
                                        alt=""
                                    />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"
                                        >02:34 PM</small
                                        >
                                        <div class="notification-heading">Mr. {{ucfirst(Auth::user()->first_name)}}</div>
                                        <div class="notification-text">
                                            Hi Teddy, Just wanted to let you ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib">
                <img class="avatar-img" src="{{asset('images/avatar/1.jpg')}}" alt="" />
                <span class="user-avatar">
							{{ucfirst(Auth::user()->first_name)}} <i class="ti-angle-down f-s-10"></i
                    ></span>
                <div
                    class="drop-down dropdown-profile admin_main_right_notification"
                >
                    <div class="dropdown-content-heading">
                        <span class="text-left">Upgrade Now</span>
                        <p class="trial-day">30 Days Trail</p>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#"><i class="ti-user"></i> <span>Profile</span></a>
                            </li>
                            <li>
                                <a href="#"
                                ><i class="ti-wallet"></i> <span>My Balance</span></a
                                >
                            </li>
                            <li>
                                <a href="#"
                                ><i class="ti-write"></i> <span>My Task</span></a
                                >
                            </li>
                            <li>
                                <a href="#"
                                ><i class="ti-calendar"></i> <span>My Calender</span></a
                                >
                            </li>
                            <li>
                                <a href="#"><i class="ti-email"></i> <span>Inbox</span></a>
                            </li>
                            <li>
                                <a href="#"
                                ><i class="ti-settings"></i> <span>Setting</span></a
                                >
                            </li>
                            <li>
                                <a href="#"
                                ><i class="ti-help-alt"></i> <span>Help</span></a
                                >
                            </li>
                            <li>
                                <a href="#"
                                ><i class="ti-lock"></i> <span>Lock Screen</span></a
                                >
                            </li>
                            <li>
                                <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
