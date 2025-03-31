<html>
<h3>Default Constructor</h3>

<?php
class Person {
    public $name;
    
    // Default Constructor
    public function __construct() {
        $this->name = "shivani";
    }

    public function display() {
        echo "Person Name: " . $this->name . "<br>";
    }
}

// Creating an object (constructor automatically initializes values)
$person1 = new Person();
$person1->display();
?>
</html>
