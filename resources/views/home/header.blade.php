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
