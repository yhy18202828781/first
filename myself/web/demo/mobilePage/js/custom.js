
$(document).on("click", "img", function(){
        var imgSrc = $(this).attr('src');
        location.href = baseUrl + '/showImage.php?imgSrc=' + imgSrc;
        return;
        $(".fullbg").toggle();
        $(this).toggleClass("fullimg");
        $(this).css({
                top: ($(window).height() - $(this).height()) / 2 + "px",
                left: ($(window).width() - $(this).width()) / 2 + "px"
        });
});

$(".fullbg").click(function(){
        $(".fullimg").removeClass('fullimg');
        $(this).hide();
});
