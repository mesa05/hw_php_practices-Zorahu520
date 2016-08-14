E. 輸入一個句子，分別統計句中各字母與數字出現的次數。
<br>
<br>

<?php

header("content-type: text/html; charset=utf-8");

$str = $_POST["txtStr"];
$strLen = strlen($str);
$arrLetter = [];
$arrNumber = [];

for( $i = 0 ; $i <= $strLen ; $i++){
        $aLetLen = count($arrLetter);
        for( $j=0 ; $j <= $aLetLen ; $j++){
            if($arrLetter[$j] == substr($str,$i,1)){
            $arrNumber[$j] += 1;
            break;
            }
            else if($arrLetter[$j] == ""){
            $arrLetter[$j] = substr($str,$i,1);
            $arrNumber[$j] += 1;
            break;
            }
        }
    }

echo $str;
echo "<hr>";
    if(isset($_POST["bntSubmit"])){
        for ($answer = 0; $answer < $aLetLen ; $answer++) {
	        echo $arrLetter[$answer]." =>" ."&nbsp".$arrNumber[$answer]."&nbsp"."次"."<br />";
        }
    }

?>


<html>
    <head>
    </head>
    <body>
        <form method="post">
        輸入一個句子:<input type="text" name="txtStr">
        <input type="submit" name="bntSubmit" value="submit">
        </form>
    </body>
</html>