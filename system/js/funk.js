var language;

jQuery(function($){
        $.datepicker.regional['pl'] = {
                closeText: 'Zamknij',
                prevText: '&#x3c;Poprzedni',
                nextText: 'Następny&#x3e;',
                currentText: 'Dziś',
                monthNames: ['Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec',
                'Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'],
                monthNamesShort: ['Sty','Lu','Mar','Kw','Maj','Cze',
                'Lip','Sie','Wrz','Pa','Lis','Gru'],
                dayNames: ['Niedziela','Poniedzialek','Wtorek','Środa','Czwartek','Piątek','Sobota'],
                dayNamesShort: ['Nie','Pn','Wt','Śr','Czw','Pt','So'],
                dayNamesMin: ['N','Pn','Wt','Śr','Cz','Pt','So'],
                weekHeader: 'Tydz',
                dateFormat: 'yy-mm-dd',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['pl']);
});

function ShowMessage(succes, message){
    if(succes){
        $(".message").removeClass("error");
        $(".message").addClass("succes");
    }
    else
    {
        $(".message").removeClass("succes");
        $(".message").addClass("error");
    }
    $('.message').html(message).show().delay(2500).slideUp(300);
}

function LoadTab(tabSelector, url){
    $.ajax({
        url: url,
        type: "POST",
        data: {lang : language},
        dataType: "html",
        success: function(data){
            $(tabSelector).html(data);
        }
    });
}

function BlockUI(dots)
{
    var mess = '<div class="loading"><img src="system/img/busy.gif" /></div>';
    if(dots != null){
        mess = '<div class="loading"><img src="../system/img/busy.gif" /></div>';
    }
    $.blockUI({
        message: mess, 
        css: {border: 'none', width: '0px'} 
    });
}

function GetLanguageEvent(lang1, lang2, dots){
    Lenguage(lang1, lang2,dots);
    Lenguage(lang2, lang1,dots);
}

function Lenguage(lang1, lang2, dots){
    if(dots == null) {
        dots = "";
    }
    
    $("#" + lang1).mouseover(function() {
        if(language != lang1) this.src = dots + "system/img/flags/"+lang1+".png";
    }).mouseout(function(){
        if(language != lang1) this.src = dots + "system/img/flags/"+lang1+"2.png";
    }).click(function(){
        if(language != lang1){
            var sel = $('#tabs').tabs('option', 'selected');
            BlockUI();
            language = lang1;
            this.src = dots + "system/img/flags/"+lang1+".png";
            $("#" + lang2).attr('src',dots + 'system/img/flags/'+lang2+'2.png');
            $.ajax({
                url: location.href,
                type: "POST",
                data: {lang : language, sel: sel},
                dataType: "html",
                success: function(data){
                    $('#dialog').dialog("destroy" );
                    $('#dialog').remove();
                    $('#bodyContainer').html(data);
                    $.unblockUI();
                }
             });
        }
    });
}


