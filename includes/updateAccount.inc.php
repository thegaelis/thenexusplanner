<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get the input values from the form
    $fullName = $_POST['fullName'];
    $email = $_POST['eMail'];
    $bio = $_POST['bio'];
    $oldPassword = $_POST['OldPassword'];
    $newPassword = $_POST['NewPassword'];
    $confirmNewPassword = $_POST['ConfirmNewPassword'];

    $current_user_id = $_SESSION['userid'];
    $current_user_password = $_SESSION['hashedpassword'];
    
    // Validate the input values
    $errors = array();

    // Full name must not be empty
    if(empty($fullName)) {
        $errors[] = "Full name is required.";
    }
    
    // Email must be valid and not empty
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is invalid.";
    } elseif(empty($email)) {
        $errors[] = "Email is required.";
    }
    
    // Bio must not exceed 255 characters
    if(strlen($bio) > 255) {
        $errors[] = "Bio must not exceed 255 characters.";
    }
    
    // Check if the old password is correct
    /*if(!password_verify($oldPassword, $current_user_password)) {
        $errors[] = "Old password is incorrect.";
    }*/


    /*
    echo var_dump("<p>password:</p>".$_SESSION['hashedpassword'])."<br>"; 
    echo var_dump("<p>input password:</p>".$oldPassword)."<br>";
    echo var_dump("<p>input password hash:</p>".md5($oldPassword))."<br>";
    */
    if(md5($oldPassword) != $current_user_password) {
        $errors[] = "Old password is incorrect.";
    }
    
    // Check if the new password and confirm new password match
    if($newPassword != $confirmNewPassword) {
        $errors[] = "New password and confirm new password do not match.";
    }
    
    // If there are no errors, update the account
    if(empty($errors)) {
        
        // Hash the new password if it's not empty
        if(!empty($newPassword)) {
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        } else {
            $hashedPassword = $_SESSION['hashedpassword'];
        }
        
        $hashedNewPassword = md5($newPassword);
        // Update the account in the database
        //$sql = "UPDATE user SET fullname='$fullName', email='$email', bio='$bio', password='$newPassword WHERE id='$current_user_id'";
        
        // if user change password:
        if(!empty($newPassword) && !empty($confirmNewPassword)){
            $sql = "UPDATE user SET FullName='$fullName', Email='$email', UserBio='$bio', Password='$hashedNewPassword' WHERE UserID='$current_user_id'";

            if ($conn->query($sql) === TRUE) {

                // Update the session variables with the new values to display the latest values
                $_SESSION['fullname'] = $fullName;
                $_SESSION['email'] = $email;
                $_SESSION['bio'] = $bio;
                $_SESSION['password'] = $hashedPassword;
                set_message("<p class='alert alert-success'>Account information and password successfully updated!</p>");
    
            } else {
                set_message("<p class='alert alert-error'>Error: " . $sql . "<br>" . $conn->error ."</p>");
            }
        }

        // keep password (NewPassword & ConfirmNewPassword is left blank)
        else {
            $sql = "UPDATE user SET FullName='$fullName', Email='$email', UserBio='$bio' WHERE UserID='$current_user_id'";

            if ($conn->query($sql) === TRUE) {

                // Update the session variables with the new values to display the latest values
                $_SESSION['fullname'] = $fullName;
                $_SESSION['email'] = $email;
                $_SESSION['bio'] = $bio;
                $_SESSION['password'] = $hashedPassword;
                set_message("<p class='alert alert-success'>Account information successfully updated!</p>");
    
            } else {
                set_message("<p class='alert alert-error'>Error: " . $sql . "<br>" . $conn->error ."</p>");
            }
        }
        
       

        $conn->close();
    }
}

// If there are errors, display them using bootstrap alert-warning
if (!empty($errors)) {
    foreach ($errors as $error) {
        set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Error: <br>' . $error .'</p></div>');
    }
}
?>
