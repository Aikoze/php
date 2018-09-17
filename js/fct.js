$(document).ready(function(){

    $countItems = [];

    $("input[type='checkbox']").change(function(e) {
        if($(this).is(":checked")){
            $(this).closest('tr').addClass("highlight");
        }
        else{
            $(this).closest('tr').removeClass("highlight");
        }
    });

    $('#filmTable tr td:last-child').each(function () {
        if($(this).html() >= 7.5) {
            $countItems.push($(this));
            $(this).closest('td').addClass("goodRev");
        } else if($(this).html() > 5.0) {
            $countItems.push($(this));
            $(this).closest('td').addClass("midRev");
        } else {
            $countItems.push($(this));
            $(this).closest('td').addClass("badRev");
        }
    });

});