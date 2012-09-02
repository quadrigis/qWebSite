$(document).ready(function() {
    $('.button').button();
    $('#dictionaryTable').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[1, "desc"]],
                    "bJQueryUI":true
                });
} );