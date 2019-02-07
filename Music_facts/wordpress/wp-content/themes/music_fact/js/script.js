jQuery(document).ready(function() {
    let contentHeight = $(".content-box").outerHeight();
    let containerHeight = $(".container-content").outerHeight() - 200;

    if(contentHeight == containerHeight){
        $('.container-content i').css("display","block");
    }
    $( window ).resize(function() {
        let contentHeight = $(".content-box").outerHeight();
        let containerHeight = $(".container-content").outerHeight() - 200;

        if(contentHeight == containerHeight){
            $('.container-content i').css("display","block");
        }
        else{
            $('.container-content i').css("display","none");
        }
    });
});
