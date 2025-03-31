<html>
<h3>Muitiple Inheritance </h3>
<?php
// First trait
trait TraitOne {
    public function methodOne() {
        echo "This is method from TraitOne.<br>";
    }
}

// Second trait
trait TraitTwo {
    public function methodTwo() {
        echo "This is method from TraitTwo.<br>";
    }
}

// Class using both traits (achieving multiple inheritance)
class MyClass {
    use TraitOne, TraitTwo;

    public function myMethod() {
        echo "This is a method from MyClass.<br>";
    }
}

// Create an object of MyClass
$obj = new MyClass();

// Call methods from both traits
$obj->methodOne();  // From TraitOne
$obj->methodTwo();  // From TraitTwo
$obj->myMethod();   // From MyClass
?>
</html>

