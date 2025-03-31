<html>
<body>
<h3>Anonymous Function  with parameterized</h3>
<?php
$add = function($a, $b) {
    return $a + $b;
};
$sub = function($a, $b) {
    return $a-$b;
};
$mul = function($a, $b) {
    return $a*$b;
};
$div = function($a, $b) {
    return $a/$b;
};
echo $add(5, 10);
echo "<br>"; 
echo $sub(5,7);
echo "<br>"; 
echo $mul(3,8);
echo "<br>"; 
echo $div(20,2);
?>
</body>
</html>




