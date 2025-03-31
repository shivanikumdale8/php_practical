<html>

<h3>Mutilevel Inheritance</h3>



<?php
// First class (Base class)
class First {
    public function firstMethod() {
        echo "This is the First class method.<br>";
    }
}

// Second class (Inheriting from First)
class Second extends First {
    public function secondMethod() {
        echo "This is the Second class method.<br>";
    }
}

// Third class (Inheriting from Second)
class Third extends Second {
    public function thirdMethod() {
        echo "This is the Third class method.<br>";
    }
}

// Create an object of Third class
$thirdObj = new Third();

// Call methods from all levels
$thirdObj->firstMethod();   // Method from First class
$thirdObj->secondMethod();  // Method from Second class
$thirdObj->thirdMethod();   // Method from Third class
?>
</html>
