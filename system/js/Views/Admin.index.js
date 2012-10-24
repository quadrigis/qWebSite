var url = $('#url').val();

function Edit(link, title, id){
    BlockUI(true);
    $.ajax({
        url: url + 'index.php/' + link + '/edit/' + id,
        type: "GET",
        success: function(data){
            $('#dialog').html(data);
            $('#dialog').dialog('option', 'title', title);
            $('#dialog').title = title;
            $('#dialog').dialog('open');
            $.validator.unobtrusive.parse($("#dialog"));
            $.unblockUI();
        },
        error: function(){
            $.unblockUI();
        }
    });
    
    $("#dialog").dialog( "option", "buttons", { "Ok": function() 
        { 
            if (!$('form').valid()) {
		return;
		}
                
            BlockUI(true);
            var data = $('form').serialize();
            $.ajax({
                url: url + 'index.php/' + link + '/save',
                type: "POST",
                data: data,
                dataType: "json",
                success: function(data){
                    $(data.Selector).load(url + data.Url);
                    $("#dialog").dialog("close"); 
                    ShowMessage(true, 'Poprawnie zapisano zmiany.');
                    $.unblockUI();
                },
                error: function(){
                    $("#dialog").dialog("close"); 
                    ShowMessage(false, 'Nie udało się zapisać zmian.');
                    $.unblockUI();
                }
            });
        } } );
    
    
}

function Delete(link, id){
    BlockUI(true);
    $.ajax({
        url: url + 'index.php/' + link + "/delete/" + id,
        type: "DELETE",
        dataType: "json",
        success: function(data){
            $(data.Selector).load(url + data.Url);
            ShowMessage(true, 'Poprawnie usunięto element.');
            $.unblockUI();
        },
        error: function(){
            ShowMessage(false, 'Nie udało się zapisać zmian.');
            $.unblockUI();
        }
    });
}

$(document).ready(function(){
    
    var tables = $('.tables');
    for(var i = 0; i < tables.length; i++){
        var tmp = $(tables[i]).attr('itemref');
        $(tables[i]).load(url + tmp);
    }
    
    $(".accordion").accordion({
        collapsible: true,
        icons: { 'header': 'ui-icon-plus', 'headerSelected': 'ui-icon-minus' },
        autoHeight: false,
	active: false
    });
    
    $('#dialog').dialog({
            autoOpen: false,
            width: 'auto',
	    modal: true,
            resizable: false
    });
    
    $('.bodyContainer').fadeIn(1000);
    
    $('#logout').click(function(){
        $.post(url + 'index.php/Login/logout', function(){
            window.location.reload();
        });
    });
    
    $('#view').click(function(){
        window.open(url);
    });
});