require([
"jquery"
], function($){
    $(document).ready(function() {
        $("body").on("click","input.radio",function(){
            var value = $(this).attr('value');
            if(value == 'pickupshipping_pickupshipping'){
                $('#pickup-adress').css('display','block');
            } else {
                $('#pickup-adress').css('display','none');
            }
        });
    });
});