<?php
session_start();
if(isset($_POST["user_reg"])){
    $name = $_POST['nm'];
    $phoneNUm = $_POST['foneNum'];
    $email = $_POST['emial'];
    $pass = $_POST['pass'];
    $conPass = $_POST['conPass'];
    if($name == "" || $phoneNUm == "" || $email == "" || $pass == "" || $conPass == ""){
        $_SESSION['error'] = "None of the fields are meant to be empty. Please fill all fields.";
        header("Location: ../registration.php");
    }else{
        if($pass != $conPass){
            $_SESSION['error'] = "The two passwords do not match. Please re-enter your password.";
            header("Location: ../registration.php");
        }else{
            //CONNECTION
            include("../classes/dbConnection.php");
            $db_handler = new databaseConnection();
            $conn = $db_handler->connectDB();
            
            $points = 0;
            $uid = $id = rand(0000000000,9999999999);
            $Query = "INSERT INTO users(id, name, email, phoneNum, password, points) 
                        VALUES($uid, '$name', '$email', $phoneNUm, '$pass', $points)";
            if (mysqli_query($conn, $Query)) {
                $_SESSION['success'] = "New record created successfully";
                header("Location: ../registration.php");
            } else {
                $sqlCode = "Error: " . $Query . "<br>" . mysqli_error($conn);
                echo $sqlCode;
            }
        }
    }
}elseif(isset($_POST['user_login'])){
    //CONNECTION
    include("../classes/dbConnection.php");
    $db_handler = new databaseConnection();
    $conn = $db_handler->connectDB();

    $email = $_POST['email'];
    $givingPass = $_POST['pass'];
    if($email == "" || $givingPass == ""){
        $_SESSION['error'] = "None of the fields are meant to be empty. Please fill all fields.";
        header("Location: ../login.php");
    }else{
        $Query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
        if($result = mysqli_query($conn, $Query)){
            $numberOfRows = mysqli_num_rows($result);
            if($numberOfRows > 0){
                $row = mysqli_fetch_assoc($result);
                $pass = $row['password'];
                if($givingPass == $pass){
                    $_SESSION['userActive'] = true;
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['userLoggedSuccess'] = "You have been logged in successfully."; 
                    header("Location: ../index.php");
                }else{
                    $_SESSION['error'] = "Password you have giving is incorrect. Please try again";
                }
            }else{
                $_SESSION['error'] = "There is no user with this giving email. Please type in a correct email or sign up.";
            }
        }else{
            $sqlCode = "Error: " . $Query . "<br>" . mysqli_error($conn);
            echo $sqlCode;
        }
    }
}elseif(isset($_POST['contact_form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if($name == "" || $email == "" || $message == ""){
        $_SESSION['error'] = "None of the fields are meant to be empty. Please fill all fields.";
        header("Location: ../contact.php");
    }else{
        //CONNECTION
        include("../classes/dbConnection.php");
        $db_handler = new databaseConnection();
        $conn = $db_handler->connectDB();

        $Query = "INSERT INTO contact(name, email, message)
                    VALUES('$name', '$email', '$message')";
        if(mysqli_query($conn, $Query)){
            $_SESSION['success'] = "Your message was sent successfull. We will reply back as soon as possible. Thanks."; 
            header("Location: ../contact.php");
        }else{
            $sqlCode = "Error: " . $Query . "<br>" . mysqli_error($conn);
            echo $sqlCode;
        }
    }
}else{
    echo "Unauthorized Access";
}

?>