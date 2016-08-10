C.輸入一個日期， 用程式計算出當天是當年度的第幾天 ?
<br>
<br>
<?php
header("content-type: text/html; charset=utf-8");

$month = 3;
$date = 27;

$Year = array (  // 每個月有幾天
        "1" => "31",
        "2" => "28",
        "3" => "31",
        "4" => "30",
        "5" => "31",
        "6" => "30",
        "7" => "31",
        "8" => "31",
        "9" => "30",
        "10" => "31",
        "11" => "30",
        "12" => "31"
);



$answer=0;

for ($i=1;$i<$month ;$i++){
    $answer=($Year[$i]+$answer);//$answer ＝ 月份天數相加
}

echo  $answer+$date; //加上當月天數
    
?>