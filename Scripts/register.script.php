<?php

if (isset($_POST['register'])) {

    // INCLUDING DATABASE HANDLER FILE
    require "dbh.script.php";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    /*========================================
    CHECKING FOR VARIOUS ERRORS IN USER INPUT
    =========================================*/

    // CHECKIND FOR EMPTY INPUTS
    if (empty($first_name) || empty($last_name) || empty($mobile) || empty($email) || empty($password) || empty($confirm_password)) {
        header("Location: ../PHP/register.php?error=emptyinputs&fname=".$first_name."&lname=".$last_name."&mobile=".$mobile."&email=".$email);
        exit();
    }
    // CHECKIND FOR INVALID CHARACTERS
    elseif (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
        header("Location: ../PHP/register.php?error=invalidinputs&lname=".$last_name."&mobile=".$mobile."&email=".$email);
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z]*$/", $last_name)) {
        header("Location: ../PHP/register.php?error=invalidinputs&fname=".$first_name."&mobile=".$mobile."&email=".$email);
        exit();
    }
    // CHECKIND FOR INVALID MOBILE
    elseif (!preg_match("/^[0-9]*$/", $mobile)) {
        header("Location: ../PHP/register.php?error=invalidmobile&fname=".$first_name."&lname=".$last_name."&email=".$email);
        exit();
    }
    // CHECKING FOR INVALID EMAIL
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../PHP/register.php?error=invalidemail&fname=".$first_name."&lname=".$last_name."&mobile=".$mobile);
        exit();
    }
    // CHECKING FOR MATCHING PASSWORDS
    elseif ($password !== $confirm_password) {
        header("Location: ../PHP/register.php?error=passworderror&fname=".$first_name."&lname=".$last_name."&mobile=".$mobile."&email=".$email);
        exit();
    }
    else {
        // CHECKING FOR PREXISTING EMAIL ADDRESS
        $sql = "SELECT email FROM user_info WHERE email=?;";
        $stmt = mysqli_stmt_init($connect);

        // CHECKING IF THE QUERY RETURNS A VALUE
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../PHP/register.php?error=sqlerror");
            exit();
        }
        else {
            // USING A PREPARED STATEMENT TO PREVENT MALLISCIOUS ACTIVITY
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            // CHECKING IF THE EMAIL EXISTS
            if ($resultCheck > 0) {
                header("Location: ../PHP/register.php?error=emailexists&fname=".$first_name."&lname=".$last_name."&mobile=".$mobile);
                exit();
            }
            else {
                // INSERTING USER INPUT INTO DATABASE IF ALL INPUTS ARE VALID
                $sql = "INSERT INTO user_info (first_name, last_name, mobile, email, password) VALUES (?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($connect);
    
                // CHECKING IF THE QUERY RETURNS A VALUE
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../PHP/register.php?error=sqlerror");
                    exit();
                }
                else {
                    // HASHING USER PASSWORD
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    
                    mysqli_stmt_bind_param($stmt, "sssss", $first_name, $last_name, $mobile, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
    
                    header("Location: ../PHP/account.php?signup=success");
                    exit();
                }
            }
        }
    }

    // CLOSING THE PREPARED STATEMENT AND THE DATABASE CONNECTION
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
}
else {
    header("Location: ../PHP/register.php?error=fillform");
    exit();
}
