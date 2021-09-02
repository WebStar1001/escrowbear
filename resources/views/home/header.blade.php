<div class="container-fluid">
    <div class="nk-header-wrap">
        <div class="flow-text">
            <div class="info-banner-text">Global Market Cap : <span class="text-success">$2,587,436,874</span></div>
            <div class="info-banner-text">BTC Dominance : <span class="text-success">BTC: 42.2% ETH: 18.7%</span>
            </div>
            <div class="info-banner-text">24hr Volume : <span class="text-success">$273,838,238,220</span></div>
            <div class="info-banner-text">EscrowBear©Market : <span class="text-success">$3,585,663</span></div>
        </div>
        <div class="nk-header-tools">
            <ul class="nk-quick-nav">
                <li class="dropdown notification-dropdown mr-n1">
                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                        <div class="dropdown-indicator user-name">Location</div>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="link-list-opt">
                            <li><a href="#"><span>Malaysia</span></a></li>
                            <li><a href="#"><span>Russia</span></a></li>
                            <li><a href="#"><span>Unite State</span></a></li>
                            <li><a href="#"><span>United Kingdom</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<header>
    <div class="logo">EscrowBear</div>
    <div class="menu">
        <ul>
            <li><a href="#">TOS</a></li>
            @if(!Auth::check())
                <li><a href="{{route('login')}}">LOGIN</a></li>
            @else
                <li><a href="{{route('logout')}}">LOGOUT</a></li>
            @endif
        </ul>
        @if(!Auth::check())
            <button id="getInvitedBtn" data-toggle="modal" data-target="#getInvitedModal">Get invited</button>
        @else
            <button id="goToDashboardBtn">Go to Dashboard</button>
        @endif

        <div class="dropdown" id="lang">
            <div class="board">
                <img src="{{asset_url('assets/img/home/uk.png')}}" alt="" class="flag">
                <span>EN</span>
                <img src="{{asset_url('assets/img/home/icons/caret.svg')}}" class="caret"/>
            </div>
            <ul class="dropdown_list">
                <li><img src="{{asset_url('assets/img/home/uk.png')}}">EN</li>
                <li><img src="{{asset_url('assets/img/home/ch.png')}}">CH</li>
                <li><img src="{{asset_url('assets/img/home/my.png')}}">MY</li>
            </ul>
        </div>
    </div>
    <button id="hamburger">
        <img src="{{asset_url('assets/img/home/icons/hamburger.svg')}}" class="normal"/>
        <img src="{{asset_url('assets/img/home/icons/close.svg')}}" class="close"/>
    </button>
</header>
