<!-- .nk-sidebar-start -->

<div class="nk-sidebar-element nk-sidebar-head justify-content-center">
    <div class="nk-sidebar-brand ">
        <a href="{{route('home')}}" class="logo-link nk-sidebar-logo">
            <h2 class="logo">Escrowbear</h2>
        </a>
    </div>
    <div class="nk-menu-trigger mr-n2">
        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                class="icon ni ni-arrow-left"></em></a>
    </div>
</div><!-- .nk-sidebar-element -->
<div class="nk-sidebar-element">
    <div class="nk-sidebar-body" data-simplebar>
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-widget d-none d-xl-block">
                <div class="user-card user-card-s2">
                    @if(Auth::user()->profile_path == '')
                        <div class="user-avatar xl bg-primary">
                            <img src="{{asset('dashlite/images/avatar/blank.png')}}"/>
                            <div class="status dot dot-lg dot-success"></div>
                        </div>
                    @else
                        <div class="user-avatar xl bg-primary">
                            <img src="{{profile_path(Auth::user()->profile_path)}}"/>
                            <div class="status dot dot-lg dot-success"></div>
                        </div>
                    @endif
                    <div class="user-info">
                        <div class="badge badge-outline-light badge-pill ucap">seller</div>
                        <h5>{{Auth::user()->name}}</h5>
                        <span class="sub-text">{{Auth::user()->email}}</span>
                    </div>
                </div>
                @if(is_verified())
                    <div class="d-flex">
                        <a href="#" class="btn btn-sm btn-primary">Create Escrow</a>
                        <a href="#" class="btn btn-sm btn-success ml-2">Accept Escrow</a>
                    </div>
                @endif
            </div><!-- .nk-sidebar-widget -->
            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                    <div class="user-card-wrap">
                        <div class="user-card">
                            @if(Auth::user()->profile_path == '')
                                <div class="user-avatar lg bg-primary">
                                    <img src="{{asset('dashlite/images/avatar/blank.png')}}"/>
                                    <div class="status dot dot-lg dot-success"></div>
                                </div>
                            @else
                                <div class="user-avatar lg bg-primary">
                                    <img src="{{profile_path(Auth::user()->profile_path)}}"/>
                                    <div class="status dot dot-lg dot-success"></div>
                                </div>
                            @endif
                            <div class="user-info">
                                <div class="badge badge-outline-light badge-pill ucap">seller</div>
                                <h5>{{Auth::user()->name}}</h5>
                                <span class="sub-text">{{Auth::user()->email}}</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex mt-2">
                    <a href="#" class="btn btn-sm btn-primary">Create Escrow</a>
                    <a href="#" class="btn btn-sm btn-success ml-1">Accept Escrow</a>
                </div>
            </div><!-- .nk-sidebar-widget -->

            <div class="nk-sidebar-menu pt-2">
                <!-- Menu -->
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title">Menu</h6>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('dashboard')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('marketplace-index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">EscrowVault</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('wallet-index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                            <span class="nk-menu-text">My Wallets</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('myaccount')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                            <span class="nk-menu-text">My Account</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('security')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-security"></em></span>
                            <span class="nk-menu-text">Security</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('notification')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-notify"></em></span>
                            <span class="nk-menu-text">Notification</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('marketcap')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                            <span class="nk-menu-text">MarketCap</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link dark-switch">
                            <span class="nk-menu-icon"><em class="icon ni ni-moon"></em></span>
                            <span class="nk-menu-text">Dark Mode</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('logout')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                            <span class="nk-menu-text">Sign Out</span>
                        </a>
                    </li>

                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
            <div class="nk-sidebar-footer">
                <ul class="nk-menu nk-menu-footer">
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                            <span class="nk-menu-text">Support</span>
                        </a>
                    </li>
                </ul><!-- .nk-footer-menu -->
            </div><!-- .nk-sidebar-footer -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-body -->
</div><!-- .nk-sidebar-element -->
