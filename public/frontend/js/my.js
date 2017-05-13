$(document).ready(function() {
    $("#languageSwitcher").on('change', function(event) {
        var locale = $(this).val();
        var _token = $("input[name=_token]");  
        console.log($("input[name=_token]"));
    });
    $.ajax({
            url: '/language',
            type: 'post',
            data: { 
                'locale': locale, 
                '_token': _token 
            },
            success:function($data){
            },
            error:function($data){

            },
            beforeSend:function(){

            },
            complete:function($data){
                window.location.reload(true);
            }
        });
});

