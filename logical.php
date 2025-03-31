<html>
  <h3>Logical operator</h3>


<body >
<?php
  $a = 8;
  $b = 4;
  $c = 6;
  echo ($a > $b && $a > $c) ? "a is greatest" : (($b > $a || $b > $c) ? "b is greatest" : "c is greatest");
?>
</body>
</html>
