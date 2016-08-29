<?php

$get = $_GET;

$start_amount        = isset($get['start_amount']) ? $get['start_amount'] : 0;
$annual_earnings     = isset($get['annual_earnings']) ? $get['annual_earnings'] : 0;
$each_month_earnings = isset($get['each_month_earnings']) ? $get['each_month_earnings'] : 0;
$years               = isset($get['years']) ? $get['years'] : 0;
$shouyi_repeat       = isset($get['shouyi_repeat']) ? $get['shouyi_repeat'] : 0;

$annual_earnings /= 12;
$annual_earnings /=100;

$benjin = $start_amount;
$shouyi = 0;

for ($i=1;$i<=$years*12;$i++) {
    $jishu = $benjin;
    if ($shouyi_repeat == 1) {
        $jishu = $benjin + $shouyi;
    }
    $shouyi += $jishu*$annual_earnings;
    $benjin += $each_month_earnings;
}

function format($number){
    return number_format($number);
}


$out = array(
    'benjin' => format($benjin),
    'shouyi' => format($shouyi),
    'total'  => format($benjin+$shouyi)
);

exit(json_encode($out));