<div class="container-fluid">
    <div class="nk-header-wrap">
        <div class="nk-menu-trigger d-xl-none ml-n1">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-header-brand d-xl-none">
            <a href="{{route('dashboard')}}" class="logo-link">
                <h2 class="logo">Escrowbear</h2>
            </a>
        </div>
        <div class="d-none">
            <a href="#" class="btn btn-primary">Create Escrow</a>
            <a href="#" class="btn btn-success ml-lg-3 mt-sm-2 mt-lg-0">Accept Escrow</a>
        </div>
        <div class="nk-header-tools">
            <ul class="nk-quick-nav">
                <li class="dropdown notification-dropdown mr-n1">
                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                        <div class="dropdown-head">
                            <span class="sub-title nk-dropdown-title">Notifications</span>
                            <a href="#">Mark All as Read</a>
                        </div>
                        <div class="dropdown-body">
                            <div class="nk-notification">
                                <div class="nk-notification-item dropdown-inner">
                                    <div class="nk-notification-icon">
                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                    </div>
                                    <div class="nk-notification-content">
                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                        </div>
                                        <div class="nk-notification-time">2 hrs ago</div>
                                    </div>
                                </div><!-- .dropdown-inner -->
                                <div class="nk-notification-item dropdown-inner">
                                    <div class="nk-notification-icon">
                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                    </div>
                                    <div class="nk-notification-content">
                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed
                                        </div>
                                        <div class="nk-notification-time">2 hrs ago</div>
                                    </div>
                                </div><!-- .dropdown-inner -->
                                <div class="nk-notification-item dropdown-inner">
                                    <div class="nk-notification-icon">
                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                    </div>
                                    <div class="nk-notification-content">
                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                        </div>
                                        <div class="nk-notification-time">2 hrs ago</div>
                                    </div>
                                </div><!-- .dropdown-inner -->
                                <div class="nk-notification-item dropdown-inner">
                                    <div class="nk-notification-icon">
                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                    </div>
                                    <div class="nk-notification-content">
                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed
                                        </div>
                                        <div class="nk-notification-time">2 hrs ago</div>
                                    </div>
                                </div><!-- .dropdown-inner -->
                                <div class="nk-notification-item dropdown-inner">
                                    <div class="nk-notification-icon">
                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                    </div>
                                    <div class="nk-notification-content">
                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span>
                                        </div>
                                        <div class="nk-notification-time">2 hrs ago</div>
                                    </div>
                                </div><!-- .dropdown-inner -->
                                <div class="nk-notification-item dropdown-inner">
                                    <div class="nk-notification-icon">
                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                    </div>
                                    <div class="nk-notification-content">
                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed
                                        </div>
                                        <div class="nk-notification-time">2 hrs ago</div>
                                    </div>
                                </div><!-- .dropdown-inner -->
                            </div>
                        </div><!-- .nk-dropdown-body -->
                        <div class="dropdown-foot center">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown" id="languageSelector">
                    <div class="dropup">
                        <a href="#" class="dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                            <span class="nk-menu-icon">
                                <img src="{{asset_url('dashlite/images/flags/english.png')}}" alt=""
                                     class="language-flag"/></span>
                            <span class="nk-menu-text d-none d-lg-inline">English</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="language-list">
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('dashlite/images/flags/english.png')}}" alt=""
                                             class="language-flag">
                                        <span class="language-name">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('dashlite/images/flags/spanish.png')}}" alt=""
                                             class="language-flag">
                                        <span class="language-name">Español</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('dashlite/images/flags/spanish.png')}}" alt=""
                                             class="language-flag">
                                        <span class="language-name">Français</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('dashlite/images/flags/turkey.png')}}" alt=""
                                             class="language-flag">
                                        <span class="language-name">Türkçe</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown" id="currencySelector">
                    <div class="dropup">
                        <a href="#" class="dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                            <span class="nk-menu-icon"><img
                                    src="{{asset_url('assets/img/currency/icons8-us-dollar-48.png')}}" alt=""
                                    class="language-flag"></span>
                            <span class="nk-menu-text d-none d-lg-inline">Dollar</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="language-list">
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('assets/img/currency/icons8-us-dollar-48.png')}}" alt=""
                                             class="language-flag">
                                        <span class="language-name">US Dollar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('assets/img/currency/icons8-euro-48.png')}}" alt=""
                                             class="language-flag">
                                        <span class="language-name">EURO</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('assets/img/currency/icons8-british-pound-48.png')}}"
                                             alt=""
                                             class="language-flag">
                                        <span class="language-name">GBP</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="language-item">
                                        <img src="{{asset_url('assets/img/currency/malaysian-ringgit-malaysia.png')}}"
                                             alt=""
                                             class="language-flag">
                                        <span class="language-name">Ringgit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="user-toggle">
                            <div class="user-avatar sm">
                                <em class="icon ni ni-user-alt"></em>
                            </div>
                            <div class="user-info d-none d-md-block">
                                <div class="user-status user-status-unverified">Unverified</div>
                                <div class="user-name dropdown-indicator">{{Auth::user()->name}}</div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <img src="{{asset_url('dashlite/images/avatar/blank.png')}}"/>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">{{Auth::user()->name}}</span>
                                    <span class="sub-text">{{Auth::user()->email}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a>
                                </li>
                                <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                </li>
                                <li><a href="html/crypto/profile-activity.html"><em
                                            class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                <li><a class="dark-switch" href="#"><em
                                            class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                            </ul>
                        </div>
                        <div class="dropdown-inner">
                            <ul class="link-list">
                                <li><a href="{{url('/logout')}}"><em
                                            class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
