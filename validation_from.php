<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <script>
        function validateForm() {
            var name = document.forms["regForm"]["name"].value;
            var email = document.forms["regForm"]["email"].value;
            var gender = document.querySelector('input[name="gender"]:checked');
            var interests = document.querySelectorAll('input[name="interests[]"]:checked');

            if (name.trim() === "") {
                alert("Name must be filled out");
                return false;
            }
            if (email.trim() === "") {
                alert("Email must be filled out");
                return false;
            }
            if (!gender) {
                alert("Please select a gender");
                return false;
            }
            if (interests.length === 0) {
                alert("Please select at least one interest");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h2>Registration Form</h2>
    <form name="regForm" method="post" action="" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other<br><br>
        
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
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "Not specified";
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
