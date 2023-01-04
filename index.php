<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project (Welcome to Travel Form)</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <img class="img" src="img.jpg" alt="AKTU Lucknow">
    <div class="container">
        <h1>Welcome To AKTU Lucknow MNC Trip</h1>
        <p>Enter your details and submit the form to confirm your participation in that Trip</p>
        <p class="submsg">Thanks for submitting your form</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name" required>
            <input type="number" name="age" id="age" placeholder="Enter your Age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender" required>
            <input type="email" name="email" id="email" placeholder="Enter your Email address" required>
            <input type="number" name="phone" id="phone" placeholder="Enter your Phone Number" required>
            <textarea name="description" id="description" cols="30" rows="10"
                placeholder="Enter your Suggetions"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mnc_trip";
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $description = $_POST['description'];
        echo "<br>";
    }
    
    $sql = "INSERT INTO `triptbl` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Description`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$description')";
    mysqli_query($conn, $sql);
    echo "The record was inserted successfully in DATABASE";
    ?>
    
</body>
</html>