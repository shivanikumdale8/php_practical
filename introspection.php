<?php

class SampleClass {
    public $property1 = "value1";

    public function method1() {
        return "This is method1";
    }
}

// Create an instance
$object = new SampleClass();

// Get class name
echo "Class Name: " . get_class($object) . "\n";

// Get class methods
echo "Methods: " . implode(", ", get_class_methods($object)) . "\n";

// Get class properties
echo "Properties: " . implode(", ", array_keys(get_object_vars($object))) . "\n";

?>
