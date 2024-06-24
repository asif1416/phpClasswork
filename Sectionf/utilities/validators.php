<?php

function validate_fname($firstName) {
    if (strlen($firstName) >= 4) {
        return true;
    } else {
        return " First Name should be at least 4 characters long.";
    }
}

function validate_lname($lastName) {
    if (strlen($lastName) >= 4) {
        return true;
    } else {
        return " Last Name should be at least 4 characters long.";
    }
}

function validate_email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (strpos($email, '@aiub.edu') == true) {
            return true;
        } else {
            return "Email address must contain the aiub.edu domain.";
        }
    } else {
        return "Invalid email format.";
    }
}

function validate_password($password) {
    if (strlen($password) >= 6) {
        if (preg_match('/[A-Z]/', $password)) {
            return true;
        } else {
            return "Password must contain at least one uppercase character.";
        }
    } else {
        return "Password must be at least 6 characters long.";
    }
}

function validate_select($gender) {
    if (!empty($gender)) {
        return true;
    } else {
        return "You must select an gender.";
    }
}

function validate_phone($phone) {
    if (preg_match('/^[0-9]+$/', $phone)) {
        return true;
    } else {
        return "Phone number must contain only numbers.";
    }
}
