B.利用1, 2, 3, 4 這四個數字， 可組出多少個數字互不相同三位數 ?
<br>
<br>
<?php
header("content-type: text/html; charset=utf-8");


for($hundred = 1 ; $hundred <= 4 ; $hundred ++){
    for($tens = 1 ; $tens <= 4 ; $tens ++){
        for($units = 1 ; $units <=4 ; $units ++){
            if($hundred != $tens && $hundred != $units){
                if($tens != $units){
                    $Integer = "$hundred $tens $units"."<p>";
                    echo "$Integer"."<p>";
                    $sum++;
                }
            }
        }
    }
}

echo "<hr>";

echo"$sum"."個";

?>