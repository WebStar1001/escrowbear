@extends('layouts.app')

@section('content')
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div id="accordion" class="accordion">
                <div class="accordion-item">
                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1">
                        <h6 class="title">1 - Sign Up to EscrowBear</h6>
                        <span class="accordion-icon"></span>
                    </a>
                    <div class="accordion-body collapse show" id="accordion-item-1" data-parent="#accordion">
                        <div class="accordion-inner">
                            <p>We made the signup process simple. Fill in your name and email and add a strong password. We then confirm that You are You. This is done in minutes by providing a photo ID that we can verify.</p>
                            <p>You are now ready to start your first Escaroo transaction.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#accordion-item-2">
                        <h6 class="title">2 - Start a New transaction</h6>
                        <span class="accordion-icon"></span>
                    </a>
                    <div class="accordion-body collapse" id="accordion-item-2" data-parent="#accordion" >
                        <div class="accordion-inner">
                            <p>Once the registration process is complete, you are ready to start your first transaction. Choose the type of transaction and currency. Add the second party's email address, then submit.</p>
                            <p> An invitation will then be sent inviting them to join the transaction.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#accordion-item-3">
                        <h6 class="title">3 - Agree and Act Upon Terms</h6>
                        <span class="accordion-icon"></span>
                    </a>
                    <div class="accordion-body collapse" id="accordion-item-3" data-parent="#accordion" >
                        <div class="accordion-inner">
                            <p>After the second party joins the transaction, both parties will need to agree on the terms.</p>
                            <p>Once complete, Escaroo creates a unique smart-contract that will manage the funds throughout your transaction, ensuring the most secure form of escrow to date.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#accordion-item-4">
                        <h6 class="title">4 - Inspect Item or Service - Release funds</h6>
                        <span class="accordion-icon"></span>
                    </a>
                    <div class="accordion-body collapse" id="accordion-item-4" data-parent="#accordion" >
                        <div class="accordion-inner">
                            <p>After all the terms have been met, the funds are ready to be released, completing the transaction.</p>
                            <p>Funds are sent instantly and should be received in the designated wallet within minutes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
