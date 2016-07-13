<?php $imgSrc = $_GET['imgSrc']; ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <title>全屏显示图片</title>
        <link href="css/show_image.css" rel="stylesheet">
    </head>
    <body>
        <img src="<?=$imgSrc?>"  alt="" class="fullimg" />
        <div class="fullbg"></div>
    </body>
</html>
<script src="js/jquery-1.8.3.js"></script>
<script>
    $(function(){
            var width = $("img").width();
            var height = $("img").height();
            var imgScale = width/height;    //图片宽高比例
            var windowScale = $(window).width()/$(window).height();    //图片宽高比例
            if (imgScale > windowScale) {
                    height = height * ($(window).width() / width);
                    $("img").css({
                            width: $(window).width(),
                            height: height,
                            top: ($(window).height() - height) / 2 + "px",
                            left: 0
                    });
            } else {
                    width = width * ($(window).height() / height);
                    $("img").css({
                            width: width,
                            height: $(window).height(),
                            top: 0,
                            left: ($(window).width() - width) / 2 + "px",
                    });
            }
    });
    $("body").click(function(){
            history.back(-1);
    });
</script>