 <h3>Count word without using string function </h3>

<?php
$str = "Aniket Himanshu";

$i = 0;
$count = 0;
$inWord = false;

while (isset($str[$i])) {
    
    if ($str[$i] == ' ' || $str[$i] == "\t" || $str[$i] == "\n") {
        $inWord = false;
    } else {
     
        if (!$inWord) {
            $count++;
            $inWord = true;
        }
    }
    $i++;
}

echo $count;  
