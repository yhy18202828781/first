<!DOCTYPE html>
<html>
    <head>
        <title>理财试算</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <style>
            body {background: #f4aa0b;color: #fff;margin: 0;padding: 0;}
            .form1 {margin-top: 10px;}
            div {margin-bottom: 5px;}
            div span {display: inline-block;width: 130px;text-align: right;}
            div input[type=text]{width:100px;}
            .submit{
                width: 100%;height: 30px;font-size: 20px;background: #ccc;text-align: center;line-height: 30px;
                margin-top: 10px;margin-bottom: 10px;
            }
            .loader {display: none;}
        </style>
    </head>
    <body>
        <form class="form1">
            <img src="yuanbao.png" style="width:50%;margin: auto;display: block;margin-bottom: 15px;">
            <div><span>初始金额：</span><input type="text" value="10000" name="start_amount" />元</div>
            <div>
                <span>预计年化收益：</span>
                <select name="annual_earnings" style="margin-left: -5px;">
                    <option value="1.75">1.75%（存银行）</option>
                    <option value="2.35">2.35%（余额宝）</option>
                    <option value="4.50">4.50%（定期理财）</option>
                    <option value="10.0" selected>10.0%（低风险基金）</option>
                    <option value="20.0">20.0%（高风险基金）</option>
                </select>
            </div>
            <div><span>每月投入金额：</span><input type="text" value="3000" name="each_month_earnings" />元</div>
            <div><span>投资期限：</span><input type="text" value="5" name="years" />年</div>
            <div>
                <span>收益是否再投资：</span>
                <label><input type="radio" value="1" name="shouyi_repeat" />是</label>
                <label><input type="radio" value="0" name="shouyi_repeat" checked />否</label>
            </div>
            <div class="submit">计算</div>
            <div class="loader"><img src="loader10.gif" /></div>
            <div class="result" style="height: 64px;display: none;">
                <div>本金：<b class="benjin"></b>元</div>
                <div>收益：<b class="shouyi"></b>元</div>
                <div>本金+收益：<b class="total"></b>元</div>
            </div>
        </form>
        <p style="position: absolute;bottom: 0;left: 50%;margin-left: -82px;">
            <a style="color:#999;text-decoration: none;" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000006">
                <img style="vertical-align: middle;" src="http://p4.qhmsg.com/t01d8eda6e551cf2615.png">
                <span style="vertical-align: middle;">粤ICP备16038686号</span>
            </a>
        </p>
    </body>
</html>
<script src="jquery-1.8.3.js"></script>
<script>
    $(".submit").click(function(){
        $(".result").hide();
        $(".loader").show();
        var data = $(".form1").serialize();
        $.get('compute.php?'+data,function(data){
            setTimeout(function(){
                $(".loader").hide();
                $(".result").show();
                $(".benjin").text(data.benjin);
                $(".shouyi").text(data.shouyi);
                $(".total").text(data.total);
            },500);
        },'json');
    });
</script>
