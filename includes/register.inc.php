<?php
$default_server_timezone = "Asia/Ho_Chi_Minh";
// Set the default timezone for the user's session
date_default_timezone_set($default_server_timezone);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $UserName               = $_POST['username'];
    $FullName               = $_POST['fullname'];
    $Email                  = $_POST['email'];
    $Password               = md5($_POST['password']);
    $Confirm_password       = $_POST['confirmpassword'];
    $Position = 'Member';

    $errors = [];

    #region generate random guid for UserID
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $guid = generateRandomString();
    #endregion

    if (email_exists($Email))
    {
        $errors[] = "$Email is already registered.";
    }

    if ($Confirm_password !== $_POST['password']) {
        $errors[] = "Password and Confirm password don't match.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            validation_errors($error);
        }
    } else {
        $sql = "INSERT INTO user (UserID, UserName, FullName, Email, Password, Position)
        VALUES ('$guid', '$UserName', '$FullName', '$Email', '$Password', '$Position')";

        if ($conn->query($sql) === TRUE) {
            // if registration succeeded:
            
            set_message('<p class="alert alert-success">Successfully registered, welcome to the Nexus Planner. Please login!</p>');            
            //redirect("Login.php");    // (issue!) message sẽ ko show nếu redirect !
            //exit;
        } else {
            set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
        }

        $conn->close();
    }
}
?>
