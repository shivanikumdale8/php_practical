<?php
if (isset($_GET['mobileno'])) {
    echo "Mobile Number: " . $_GET['mobileno'];
} else {
    echo "Please enter your mobile number.";
}
if(isset($_GET['gender'])){
	echo"Gender:".$_GET['gender'];
}
?>
