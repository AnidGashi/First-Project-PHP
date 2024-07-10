<?php
    $user = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $conn = new mysqli("localhost", "root", "", "Users");

    if($conn->connect_error){
        die("Connection error: ".$conn->connect_error);
    }

    $check_query = "SELECT * FROM Eshopping WHERE Username='$user'";
    $check_result = $conn->query($check_query);
    
    if ($check_result->num_rows > 0) {
        die("Username already exists. Please choose a different username.");
    }

    $ins = $conn->query("INSERT INTO Eshopping (Username, Email, Password) VALUES ('$user', '$email', '$pass')");

    if($ins === TRUE){
        header("Location: login.php");
        exit();
    } else {
        die("Data inserting failed: " . $conn->error);
    }

    $conn->close()
?>