<html>
<h3>Multidimensional Array</h3>

<body>
<?php
$contacts = array(
    "shivani" => array("email" => "shivani@example.com", "phone" => "12345"),
    "vaishnavi" => array("email" => "vaishnavi@example.com", "phone" => "67890")
);


echo $contacts["shivani"]["email"]."<br>";

echo $contacts["vaishnavi"]["email"];
 
?>
</body>
</html>
