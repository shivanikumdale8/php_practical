<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other<br><br>
        
        <label>Interests:</label>
        <input type="checkbox" name="interests[]" value="Sports"> Sports
        <input type="checkbox" name="interests[]" value="Music"> Music
        <input type="checkbox" name="interests[]" value="Reading"> Reading<br><br>
        
        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $gender = htmlspecialchars($_POST['gender']);
        $interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : "None";

        echo "<h3>Registration Details</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Interests: $interests <br>";
    }
    ?>
</body>
</html>

