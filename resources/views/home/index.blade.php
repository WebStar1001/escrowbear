<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EscrowBear</title>
    <meta name="description" content="Escrow website for Crypto Currency">
    <link rel="shortcut icon" href="{{asset_url('favicon.ico')}}">
    <link rel="stylesheet" href="{{asset_url('dashlite/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('dashlite/assets/css/theme.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset_url('assets/css/custom.css?ver=2.3.0')}}">
    <link rel="stylesheet" href="{{asset_url('assets/css/home.css?ver=2.2')}}">
</head>
<body style="background-color: white;">
<div class="nk-header-fluid d-xl-block d-none">
    @include('layouts/partical/infoheader')
</div>
@include('home.header')
<div class="hero">
    <div>
        <p class="title">
            Earth's only HyperEscrow for Crypto Currency
            <img src="{{asset_url('assets/img/home/bow.png')}}" class="bow"/>
        </p>
        <p class="description">
            EscrowBear is a Unicorn Escrow Service for Bulk OTC P2P transactions. Built on proof of concept,
            transparency
            and white label anonymity, it is the only escrow you can trust for high value hyperledger embedded
            transfers.
        </p>

        <button data-toggle="modal" data-target="#getInvitedModal">Get Invited</button>
    </div>
    <div class="types">
        <img src="{{asset_url('assets/img/home/type-1.png')}}" class="type-1"/>
        <img src="{{asset_url('assets/img/home/type-2.png')}}" class="type-2"/>
        <img src="{{asset_url('assets/img/home/type-3.png')}}" class="type-3"/>
        <img src="{{asset_url('assets/img/home/type-4.png')}}" class="type-4"/>
        <img src="{{asset_url('assets/img/home/type-5.png')}}" class="type-5"/>
        <img src="{{asset_url('assets/img/home/type-6.png')}}" class="type-6"/>
        <img src="{{asset_url('assets/img/home/type-7.png')}}" class="type-7"/>
    </div>
    <div>
        <img src="{{asset_url('assets/img/home/banner-1.png')}}" class="animation right2left" alt="">
    </div>
</div>

<div class="hyperescrow">
    <img src="{{asset_url('assets/img/home/bg.png')}}" class="bg"/>

    <div class="container">
        <div class="main">
            <div>
                <img src="{{asset_url('assets/img/home/banner-2.png')}}" class="animation left2right" alt="">
            </div>
            <div>
                <p class="title">
                    HyperEscrow Payment Mechanism
                </p>
                <p class="description">
                    The HyperEscrow Payment Mechanism is infinitely faster, tx-irreversible and truly regulatory
                    compliant,
                    offering our Buyers and Sellers peace of mind.<br><br>
                    By harnessing the power of Keyloop Contracts, our advanced patented mechanism puts the control
                    of
                    coin and
                    fiat back into your hands.
                </p>
            </div>
        </div>
        <div class="list3box">
            <ul>
                <li>
                    <img src="{{asset_url('assets/img/home/3box-1.png')}}" alt="" class="logo">
                    <p class="title">Lowest Fees</p>
                    <p class="description">
                        EscrowBear charges 0.3% for Escrows under 5000 BTC Equivalent and 0.1% for Escrows over 5000
                        BTC. Minimum
                        Escrow of 300 BTC is required for the static capped fee. We do not offer magic discounts, or
                        low
                        OTC
                        premium
                        but we charge what is fair. We are the gold standard.
                    </p>
                </li>
                <li>
                    <img src="{{asset_url('assets/img/home/3box-2.png')}}" alt="" class="logo">
                    <p class="title">Transparent Ledgers</p>
                    <p class="description">
                        All Institutionalised OTC Crypto Batches are only approved after KYC, AML and 18 other Due
                        Diligence
                        checks
                        assuring that stringent measures are complied with. CRS checks with the OECD is done with
                        every
                        quarter.
                        Also this is not compliant under any USA-SEC bodies for escrow monitoring.
                    </p>
                </li>
                <li>
                    <img src="{{asset_url('assets/img/home/3box-3.png')}}" alt="" class="logo">
                    <p class="title">No More Scams</p>
                    <p class="description">
                        With HyperEscrow commandAI, smart protocols are auto executed without manual interventions.
                        Our
                        AI
                        mechanism
                        detects when there is breach or dispute and terminates the process entirely whlist funds are
                        returned
                        inside
                        60 minutes without delay.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="banking_partners">
    <p class="title">Banking Partners</p>
    <div>
        <img src="{{asset_url('assets/img/home/safra.png')}}"/>
        <img src="{{asset_url('assets/img/home/ubs.png')}}"/>
    </div>
    <div>
        <div class="item">
            <p class="title">Technology Partners</p>
            <img src="{{asset_url('assets/img/home/metamask.png')}}" alt="">
        </div>
        <div class="item">
            <p class="title">AI Due Diligence Partner</p>
            <img src="{{asset_url('assets/img/home/refinitiv.png')}}" alt="">
        </div>
    </div>
    <div>
        <p class="title">Media Partners</p>
        <div>
            <img src="{{asset_url('assets/img/home/marketwatch.png')}}" alt="">
            <img src="{{asset_url('assets/img/home/bitinfocharts.png')}}" alt="">
        </div>
    </div>
</div>

<div class="howcan">
    <div class="types">
        <img src="{{asset_url('assets/img/home/type-1.png')}}" class="type-1"/>
        <img src="{{asset_url('assets/img/home/type-2.png')}}" class="type-2"/>
        <img src="{{asset_url('assets/img/home/type-3.png')}}" class="type-3"/>
        <img src="{{asset_url('assets/img/home/type-4.png')}}" class="type-4"/>
        <img src="{{asset_url('assets/img/home/type-5.png')}}" class="type-5"/>
        <img src="{{asset_url('assets/img/home/type-6.png')}}" class="type-6"/>
        <img src="{{asset_url('assets/img/home/type-7.png')}}" class="type-7"/>
    </div>
    <div class="container">
        <div class="content">
            <p class="title">
                How can EscrowBear Secure payment system help your business?
            </p>
            <p class="subtitle">
                Protect your customers with the most secure online payment gateway.
            </p>
            <p class="description">
                Whether it’s cryptocurrency deposits via the Ledger/ Hot wallet to blockchain , or bulk wire
                transfers
                to the
                Swiss Banks, Whether you’re a small OTC marketplace or a private family office, we mind your
                business
                and take
                great interest in your convenience.<br><br>

                EscrowBear is now used by premier Education Institutions, Private Family Trusts, Crypto Mining Farms
                and
                NeoBanking Workstations complicit with thetadecimal hashpower to grow organisations and keep them
                ahead
                of
                curve.<br><br>

                Escrow Bear is powered with high performance Blockchain and AI Solutions. We leverage our solution
                accelerators
                and frameworks by bringing in vital partners into our global platform.
                Add EscrowBear to your business and allow your customers to transact with confidence and safety.
            </p>
        </div>
        <div>
            <img src="{{asset_url('assets/img/home/howcan.png')}}" class="animation right2left" alt="">
        </div>
    </div>
</div>

<div class="transact">
    <div class="container">
        <div>
            <img src="{{asset_url('assets/img/home/transact.png')}}" class="animation left2right" alt="">
        </div>
        <div class="content">
            <img src="{{asset_url('assets/img/home/bow.png')}}" alt="" class="bow">
            <p class="title">
                Transact Safely With Our HyperEscrow Pilot
            </p>
            <p class="description">
                EscrowBear combines online HyperEscrow with redactive Machine Learning without manual interventions
                to
                provide
                a
                secure and efficient way to make peer-to-peer payments with strangers online or in person in a
                simple, 4
                Step
                process.
            </p>

            <img src="{{asset_url('assets/img/home/dots.png')}}" alt="" class="dots">
        </div>
    </div>
</div>

<div class="faq">
    <div class="dots">
        <img src="{{asset_url('assets/img/home/dots.png')}}"/>
    </div>
    <div class="content">
        <p class="title">Getting Started at EscrowBear</p>
        <div class="items">
            <div class="faq-item">
                <div class="header">
                    <span>Get Invited at EscrowBear</span>
                    <img src="{{asset_url('assets/img/home/icons/blue-caret.svg')}}"/>
                </div>
                <div class="body">
                    We made the Invitation process easy. Click on Get Invited and enter your details. EscrowBear
                    will
                    send you
                    an Invitation Code for you to enter and resume SignUp. Fill your name, email and add a strong
                    password. The
                    process takes minutes.
                </div>
            </div>
            <div class="faq-item">
                <div class="header">
                    <span>Consent to KYC Whitepaper and AML Regulatory Standards</span>
                    <img src="{{asset_url('assets/img/home/icons/blue-caret.svg')}}"/>
                </div>
                <div class="body">
                    After SignUp, proceed to eSign the KYC/AML whitepaper. Then Proceed to send an invte to the
                    respective
                    party(Buyer/Seller). Choose your transaction tranche size and currency of deposit.(fiat/crypto).
                    Photo and
                    Identity Verification is usually approved by this time.
                </div>
            </div>
            <div class="faq-item">
                <div class="header">
                    <span>Agree and Act Upon Terms</span>
                    <img src="{{asset_url('assets/img/home/icons/blue-caret.svg')}}"/>
                </div>
                <div class="body">
                    After the second party joins the transaction, botoh parties will need to agree on the terms.
                    Once both parties accept terms and act upon, EscrowBear creates a hyper smart contract that will
                    manage the
                    deposit from the Buyer and the crypto from the Seller throughout the transaction, ensuring the
                    most
                    secure
                    form of bulk escrow to date.
                </div>
            </div>
            <div class="faq-item">
                <div class="header">
                    <span>Retro Inspect Cash and Crypto- Funds Released</span>
                    <img src="{{asset_url('assets/img/home/icons/blue-caret.svg')}}"/>
                </div>
                <div class="body">
                    After all the terms have been met, the funds are ready to be released, completing the
                    transaction.
                    Funds are
                    sent instantly and should be received in the designated wallet within minutes.
                </div>
            </div>
        </div>
    </div>
    <div class="image">
        <img src="{{asset_url('assets/img/home/faq.png')}}" class="animation right2left"/>
    </div>
</div>

<div class="stay">
    <img src="{{asset_url('assets/img/home/sponsor.png')}}" alt="" class="sponsors">
    <div>
        <div class="image">
            <img src="{{asset_url('assets/img/home/stay.png')}}" class="animation left2right"/>
        </div>
        <div class="content">
            <p class="title">
                Stay in total control with our <a href="#">HyperEscrow</a> Transaction System
            </p>
            <p class="description">
                EscrowBear’s proprietary HyperEscrow transaction system will never ask you for your private keys.
                Your
                cryptocurrencies will be securely held on a publicly listed blockchain address within each block.
                Keyless
                escrow creates an unique tx loop data which is end to end encrypted, guarenteeing no one can access
                your
                crypto, not even EscrowBear.
            </p>
        </div>
    </div>
</div>

<div class="sponsor">
    <p class="title">EscrowBear Partnering Institutions</p>
    <div>
        <img src="{{asset_url('assets/img/home/TUD.png')}}"/>
        <img src="{{asset_url('assets/img/home/RUT.png')}}"/>
        <img src="{{asset_url('assets/img/home/UPC.png')}}"/>
        <img src="{{asset_url('assets/img/home/CUT.png')}}"/>
    </div>
</div>

<div class="about">
    <img src="{{asset_url('assets/img/home/bg-2.png')}}" class="bg"/>
    <div>
        <img src="{{asset_url('assets/img/home/desktop.png')}}" class="animation left2right"/>
        <img src="{{asset_url('assets/img/home/mobile.png')}}" class="animation right2left"/>
    </div>
</div>

<div class="avatars">
    <div class="crypto">
        <div class="list">
            <p class="title">crypto friendly</p>
            <ul>
                <li><img src="{{asset_url('assets/img/home/bitcoin.png')}}"/></li>
                <li><img src="{{asset_url('assets/img/home/ether.png')}}"/></li>
                <li><img src="{{asset_url('assets/img/home/ripple.png')}}"/></li>
                <li><img src="{{asset_url('assets/img/home/tether.png')}}"/></li>
            </ul>
        </div>
        <img src="{{asset_url('assets/img/home/qrcode.png')}}" alt="">
    </div>
    <div class="supported_by">
        <img src="{{asset_url('assets/img/home/keepkey.png')}}" alt="" class="keepkey">
        <div>
            <p class="title">Supported by</p>
            <img src="{{asset_url('assets/img/home/trezor.png')}}"/>
            <img src="{{asset_url('assets/img/home/ledger.png')}}"/>
        </div>
        <img src="{{asset_url('assets/img/home/covid.png')}}" class="covid"/>
    </div>
</div>
@include('home.footer')
<div class="modal fade" tabindex="-1" id="getInvitedModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Invitation to Email</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{route('get-invited')}}" class="form-validate is-alter" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="email-address">Email address</label>
                        <div class="form-control-wrap">
                            <input type="email" class="form-control" id="email-address" name="email_address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <h3 class="form-label text-danger">Need more due diligence, User not in database</h3>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-lg btn-primary" id="inviteButton" disabled>Receive
                            Invitation
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="LandingPageNoticeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">ESCROWBEAR COIN NOTICE</h5>
            </div>
            <div class="modal-body">
                <p>Due to high network transaction fees (GAS / GWEI) we have deactivated all tokens other than Ethereum
                    (ETH) from the Escaroo escrow service. We decided to do this because too many users were
                    experiencing unrealistic gas fees when paying for an escrow transaction. Network fees have nothing
                    to do with Escaroo but are dictated by current network activity. High transaction volume translates
                    into higher networks fees and slower transaction times. ERC20 Tokens like USDT, DAI and WBTC
                    inherently use more gas.</p>
                <p>
                    Until we figure out a solution that makes sense for our clients, Ethereum will be the only token
                    available for escrow. That said, Bitcoin is coming back soon! We will keep you updated on our
                    progress. Thanks.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{asset_url('dashlite/assets/js/bundle.js?ver=2.2.0')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-199462509-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-199462509-1');
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#LandingPageNoticeModal').modal('show');
        $('.faq-item .header').click(function () {
            $(this).closest('.faq-item').toggleClass('collapsed');
        });

        $('#hamburger').click(function () {
            $('header').toggleClass('opened');
        });

        $('#lang').click(function () {
            $(this).toggleClass('opened');
        });

        $('#lang .dropdown_list li').click(function () {
            $('#lang .board .flag').attr('src', $(this).find('img').attr('src'));
            $('#lang .board span').text($(this).text());
        });
        $('#goToDashboardBtn').click(function () {
            window.location.href = 'dashboard';
        });

        // animation

        // right to left
        const options = {root: null, rootMargin: '0px', threshold: 1};
        const right2LeftAnimation = (entries, observer) => {
            entries.forEach(entry => {
                entry.target.classList.toggle("slide-in-from-right", entry.isIntersecting);
            });
        };
        const right2Leftobserver = new IntersectionObserver(right2LeftAnimation);
        const rightElements = document.querySelectorAll('.animation.right2left');
        rightElements.forEach(el => {
            right2Leftobserver.observe(el, options);
        });

        // left to right
        const left2RightAnimation = (entries, observer) => {
            entries.forEach(entry => {
                entry.target.classList.toggle("slide-in-from-left", entry.isIntersecting);
            });
        };
        const leftToRightobserver = new IntersectionObserver(left2RightAnimation);
        const leftElements = document.querySelectorAll('.animation.left2right');
        leftElements.forEach(el => {
            leftToRightobserver.observe(el, options);
        });
    });
</script>
</html>
