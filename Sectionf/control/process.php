<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
include("../utilities/validators.php");

    $validation_success = true;

    
    $name = $_POST['firstName'];
    $name_validation = validate_fname($name);
    if ($name_validation !== true) {
        echo "<p>Name: $name_validation</p>";
        $validation_success = false;
    }

    $name = $_POST['lastName'];
    $name_validation = validate_fname($name);
    if ($name_validation == false) {
        echo "<p>Name: $name_validation</p>";
        $validation_success = false;
    }

    
    $email = $_POST['email'];
    $email_validation = validate_email($email);
    if ($email_validation == false) {
        echo "<p>Email: $email_validation</p>";
        $validation_success = false;
    }

    
    $password = $_POST['password'];
    $password_validation = validate_password($password);
    if ($password_validation == false ){
        echo "<p>Password: $password_validation</p>";
        $validation_success = false;
    }

    
    
    $select_option = $_POST['gender'];
    $select_validation = validate_select($select_option);
    if ($select_validation == false) {
        echo "<p>Select Option: $select_validation</p>";
        $validation_success = false;
    }

    
    $phone = $_POST['phone'];
    $phone_validation = validate_phone($phone);
    if ($phone_validation == false) {
        echo "<p>Phone: $phone_validation</p>";
        $validation_success = false;
    }

    if ($validation_success) {
        // Process the form data
        echo "Validation successful! Process form data here.";
    }
}

