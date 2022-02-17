<?php

if (isset($_POST['login'])) {

    require "dbh.script.php";

    $mail = $_POST['email'];
    $password = $_POST['password'];

    if (empty($mail) || empty($password)) {
        header("Location: ../PHP/account.php?error=emptyinputs");
        exit();
    }
    else {
        $sql = "SELECT * FROM user_info WHERE email=?;";
        $stmt = mysqli_stmt_init($connect);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../PHP/account.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $mail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                
                if ($pwdCheck == false) {
                    header("Location: ../PHP/account.php?error=wrongpassword");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['Id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];

                    header("Location: ../PHP/account.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../PHP/account.php?error=wrongpassword");
                    exit();
                }
            } 
            else {
                header("Location: ../PHP/account.php?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("Location: ../PHP/account.php");
    exit();
}