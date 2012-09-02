$(document).ready(function() {
    $('.button').button();
    $('#newsTable').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[1, "desc"]],
                    "bJQueryUI":true
                });
} );