jQuery(function($){

    $('.p-recruit__tab').click(function(){
        $('.p-recruit__tab').removeClass('is-active');
        $(this).toggleClass('is-active');

        let index = $(this).index();
        $('.p-recruit__info').hide();
        $('.p-recruit__info').eq(index).show();
    });
});