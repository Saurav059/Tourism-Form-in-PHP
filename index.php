<?php
$insert = false;
if(isset($_POST['name'])){

    //setting connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //CREATE DATABASE CONNECTION
    $con = mysqli_connect($server, $username, $password);

    //CHECK CONNECTION SUCCESS
    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "Success Connecting to the Database";


    //COLLECT POST VARIABLES
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    
    $sql = "INSERT INTO `nepaltours`.`nepaltours` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) 
            VALUES('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;


    //QUERY EXECUTION
    if($con->query($sql) == true){
        //FLAG FOR SUCCESSFUL INSERTION.
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    //CLOSE DATABASE CONNECTION
    $con -> close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>PHP Project travel Form</title>
</head>
<body>
    <img class="bg" src="nep1.jpg" alt="nepal">
    <div class="container">
        <h1>Welcome to Nepal</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>;
        
        <?php
        if($insert == true){
            echo "<p class='submsg'>Thanks for filling up the form, we are happy to Welcome you soon.</p>";
        }
    ?>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="number" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="desc" id="desc" rows="10" cols="30" placeholder="Description"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>

    <script src="index.js"></script>

    
</body>
</html>