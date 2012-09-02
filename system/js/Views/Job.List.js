$(document).ready(function() {
    $('.button').button();
    $('#jobTable').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[1, "desc"]],
                    "bJQueryUI":true
                });
} );