D. 水仙花數 = 三位數各數字的立方和等於該數(例如:153)，請寫程式列出所有的水仙花數。
<!-- 153=1的三次方＋5的三次方＋3的三次方 -->

<br>
<br>
<?php
header("content-type: text/html; charset=utf-8");

$hundred = 0 ;
$tens = 0 ;
$units = 0 ;


for ($hundred = 1; $hundred <= 9; $hundred++) {
     for ($tens = 0; $tens <= 9; $tens++) {
          for ($units = 0; $units <= 9; $units++) {
              if(pow($hundred,3)+pow($tens,3)+pow($units,3) == 
                    100 * $hundred + 10 * $tens + $units){
                        echo "$hundred $tens $units"."<p>";
                }
          }
     }
}


?>

