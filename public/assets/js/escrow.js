"use strict";
const serverUrl = "https://6hao1qyovtm3.bigmoralis.com:2053/server";
const appId = "o1OBkxjjiNyMhRtlxlN45dWAdCuLLZTNS1rOUyIU";
Moralis.start({serverUrl, appId});
!function (NioApp, $) {
    let currency;
    let WalletAddress;
    let firstStep = $('#firstStepBlock');
    let secondStep = $('#secondStepBlock');
    let thirdStep = $('#thirdStepBlock');

    $('#escrowName').keyup(function () {
        if ($(this).val() != '' && $('#escrowDescription').val() != '') {
            firstStep.find('#nextBtn').prop('disabled', false);
        }else{
            firstStep.find('#nextBtn').prop('disabled', true);
        }
    });
    $('#escrowDescription').keyup(function () {
        if ($(this).val() != '' && $('#escrowName').val() != '') {
            firstStep.find('#nextBtn').prop('disabled', false);
        }else{
            firstStep.find('#nextBtn').prop('disabled', true);
        }
    });

    $('div[datatype="currencySelector"]').click(function () {
        currency = $(this).attr('id');
        let lowerCaseCurrency = currency.toLowerCase();
        $('#currencyBtn').find('em').addClass('ni-sign-' + lowerCaseCurrency);
        $('#currencyBtn').find('span').html(currency);
        $('#currencyModal').modal('hide');
        if ($('#escrowAmount').val() != '' && currency != undefined && WalletAddress != undefined) {
            $('#secondStepBlock').find('#nextBtn').prop('disabled', false);
        }else{
            $('#secondStepBlock').find('#nextBtn').prop('disabled', true);
        }
    })
    $('#connectWalletBtn').click(async function () {
        $('#connectWalletBtn').addClass('no-click');
        Moralis.authenticate().then(function (user) {
            WalletAddress = user.get('ethAddress');
            $('#connectWalletBtn').html('Connected ' + WalletAddress);
            $('#connectWalletBtn').addClass('col-8');
            if ($('#escrowAmount').val() != '' && currency != undefined && WalletAddress != undefined) {
                secondStep.find('#nextBtn').prop('disabled', false);
            }else {
                secondStep.find('#nextBtn').prop('disabled', true);
            }
        })
        // const user = await Moralis.authenticate({ provider: "walletconnect" })
    });
    $('#escrowAmount').keyup(function () {
        if ($(this).val() != '' && currency != undefined && WalletAddress != undefined) {
            secondStep.find('#nextBtn').prop('disabled', false);
        }else{
            secondStep.find('#nextBtn').prop('disabled', true);
        }
    });
    $('#escrowEmail').keyup(function () {
        if ($(this).val() != '') {
            thirdStep.find('#nextBtn').prop('disabled', false);
        }else{
            thirdStep.find('#nextBtn').prop('disabled', true);
        }
    });

    firstStep.find('#nextBtn').click(function () {
        firstStep.fadeOut();
        secondStep.fadeIn()
    });
    secondStep.find('#prevBtn').click(function () {
        secondStep.fadeOut();
        firstStep.fadeIn()
    });
    secondStep.find('#nextBtn').click(function () {
        firstStep.fadeOut();
        secondStep.fadeIn()
    });


    function OpenMasterCodeModal() {
        $('#masterCodeModal').modal('show');

    } // init accountSummary
    NioApp.coms.docReady.push(function () {
        OpenMasterCodeModal();
    });
}
(NioApp, jQuery);
