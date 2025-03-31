<html>
<body>
<h3>Anonymous Function without Parameters</h3>

<?php
$add = function() {
    $a = 5;
    $b = 10;
    return $a + $b;
};
$sub = function() {
    $a = 5;
    $b = 7;
    return $a - $b;
};
$mul = function() {
    $a = 3;
    $b = 8;
    return $a * $b;
};

echo $add()."<br>";  
echo $sub()."<br>";  

echo $mul(); 
?>

</body>
</html>
