$(document).ready(function(){
    $('#tabs').tabs();
    
    $('#dialog').dialog({
            autoOpen: false,
            width: 'auto',
	    modal: true,
            resizable: false,
            buttons: {
                    "Ok": function() {
                            $(this).dialog("close");
                    }
            }
    });
    
    $('#policy').click(function(){
        $('#dialog').dialog('open');
    });
    
    GetLanguageEvent("pl", "en");
    $('.bodyContainer').show();
});