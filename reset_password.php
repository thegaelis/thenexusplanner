<?php
include_once "header.php";
include_once "includes/login.inc.php";
include("includes/db.php");

// Check if user is logged in
if (!logged_in()) {
    redirect("login.php");
}

// Check if user is an admin
if ($_SESSION['position'] != 'Admin') {
    echo '<div class="text-center mt-5"><h1 class="text-danger">Access Denied</h1></div>';
    include_once "footer.php";
    exit();
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    
    // Reset password to "Abcd@123"
    $default_password = "Abcd@123";
    $hashed_password = md5($default_password);
    $sql = "UPDATE user SET Password='$hashed_password' WHERE UserID='$user_id'";
    mysqli_query($conn, $sql);
    
    // Display success message and redirect
    set_message('<p class="alert alert-success">Successfully reset user password to Abcd@123</p>');
    
    redirect("users.php");
}

include_once "footer.php";
?>
