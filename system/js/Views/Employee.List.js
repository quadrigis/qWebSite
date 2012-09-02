$(document).ready(function() {
    $('.button').button();
    $('#employeeTable').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[1, "desc"]],
                    "bJQueryUI":true
                });
});