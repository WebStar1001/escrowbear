<header>
    <div class="logo">EscrowBear</div>
    <div class="menu">
        <ul>
            <li><a href="#">TOS</a></li>
            <li><a href="{{route('login')}}">LOGIN</a></li>
        </ul>

        <button id="getInvitedBtn"data-toggle="modal" data-target="#getInvitedModal">Get invited</button>

        <div class="dropdown" id="lang">
            <div class="board">
                <img src="{{asset('assets/img/home/uk.png')}}" alt="" class="flag">
                <span>EN</span>
                <img src="{{asset('assets/img/home/icons/caret.svg')}}"svg" class="caret" />
            </div>
            <ul class="dropdown_list">
                <li><img src="{{asset('assets/img/home/uk.png')}}">EN</li>
                <li><img src="{{asset('assets/img/home/ch.png')}}">CH</li>
                <li><img src="{{asset('assets/img/home/my.png')}}">MY</li>
            </ul>
        </div>
    </div>
    <button id="hamburger">
        <img src="{{asset('assets/img/home/icons/hamburger.svg')}}" class="normal" />
        <img src="{{asset('assets/img/home/icons/close.svg')}}" class="close" />
    </button>
</header>
