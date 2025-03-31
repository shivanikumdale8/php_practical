
<html>
<h3>parameterized constructor</h3> 

<?php
class Student {
    public $name;
    public $age;

    // Parameterized Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display student details
    public function display() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Student Age: " . $this->age . "<br>";
    }
}

// Creating objects with parameters
$student1 = new Student("shivani", 18);
$student2 = new Student("vaishnavi", 18);

// Display student details
$student1->display();
$student2->display();
?>
</html>
