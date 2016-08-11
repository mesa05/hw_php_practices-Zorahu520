F. 有一個球從 100 公尺處落下，每次落地都反彈至原高度的二分之一，請問它第五次落地後，會反彈到多高?
<br>
<br>

<?php

header("content-type: text/html; charset=utf-8");

$totalDistance = 100 ;

for ($bounceTimes = 1; $bounceTimes <= 5 ; $bounceTimes++) {
    $totalDistance = $totalDistance * 0.5 ;
    if($bounceTimes == 5){
        echo "$totalDistance" ;
    }
    
    
}
?>