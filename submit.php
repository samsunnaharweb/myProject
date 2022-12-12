<?php
include("db.php");

function clearInput($input){
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}

if(isset($_POST['submit'])){
    $name       =clearInput($_POST['name']);
    $contact    = clearInput($_POST['contact']);
    $email      =clearInput($_POST['email']);
    $message    = clearInput($_POST['message']);

    if(!empty($name)){
        if(!preg_match('/^[a-zA-Z\s]/', $name)){
            $errorName= "Input is incorrect";
        }
    }else{
        $errorName= "Name filed is empty, please type your name";
    }

    if(!empty($contact)){
        if(!preg_match('/^[0-9\s]/', $contact)){
            $errorContact= "Input is incorrect";
        }
    }else{
        $errorName= "Contact filed is empty, please type your number";
    }

    if(!empty($email)){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errorEmail= "Email is correct";
        }
    }

    if(empty($message)){
        $errorMessage= "Please type your text";
    }

    $sql = "INSERT INTO clients (name, contact, email, message) VALUES ('$name', '$contact', '$email', '$message')";

    if(mysqli_query($conn, $sql)){
        echo "Information Saved";
    }else{
        echo "ERROR".$sql."<br/>".mysqli_error($conn);
    }

}



?>