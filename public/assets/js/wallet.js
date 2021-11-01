"use strict";

!function (NioApp, $) {
    function OpenMasterCodeModal() {
        $('#masterCodeModal').modal('show');

    } // init accountSummary
    NioApp.coms.docReady.push(function () {
        OpenMasterCodeModal();
    });
}
(NioApp, jQuery);
