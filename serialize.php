<html>
<h3>Serialize</h3>

<?php

class User {
    public $name;
    public $email;
    
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

// Create an object with both name and email
$user = new User("Shivani", "shivani@gmail.com");

// Serialize the object
$serializedUser = serialize($user);
echo "Serialized User: " . $serializedUser . "<br>";

// Unserialize the object
$unserializedUser = unserialize($serializedUser);

echo "Unserialized User: Name - " . $unserializedUser->name . ", Email - " . $unserializedUser->email . "<br>";

?>

</html>
