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
    
    // Delete user
    $sql = "DELETE FROM user WHERE UserID='$user_id'";
    mysqli_query($conn, $sql);
    
    // Display success message and redirect
    set_message('<p class="alert alert-success">User deleted successfully!</p>');

    redirect("users.php");
}

include_once "footer.php";
?>