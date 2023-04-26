<?php ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

include("db.php");
include("functions.php");

#region Create default admin user if not exist
function create_default_user($conn) {
    $default_username = "admin";
    $default_password = "admin";

    $sql = "SELECT * FROM user WHERE UserName = '$default_username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        $FullName = "Admin";
        $Email = "admin@example.com";
        $Password = md5($default_password);
        $Position = "Admin";

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

        $sql = "INSERT INTO user (UserID, UserName, FullName, Email, Password, Position)
                VALUES ('$guid', '$default_username', '$FullName', '$Email', '$Password', '$Position')";

        if ($conn->query($sql) === TRUE) {
            set_message("<p class='alert alert-success'>Default admin user created!</p>");
        } else {
            set_message("<p>Error creating default admin user: " . $conn->error . "</p>");
        }
    }
}
#endregion

// call the function to create default user 'admin'
create_default_user($conn);


?>