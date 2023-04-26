<?php
include_once "header.php";
include("includes/db.php");
//include_once 'includes/dbh.inc.php'; // db connect info (migrated)

if (logged_in()) {
    // only admin should be able to access this page!
    if ($_SESSION['position'] != 'Admin') {
        echo '<div class="text-center mt-5"><h1 class="text-danger">Access Denied</h1></div>';
        include_once "footer.php";
        exit();
    }
}
?>
<div class="container">
    <?php display_message(); ?>
    <div id="usersbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <h1 class="text-center">Users </h1>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="row">User ID</th>
                    <th scope="row">Username</th>
                    <th scope="row">Position</th>
                    <th scope="row">Display Name</th>
                    <th scope="row">Email</th>
                    <th scope="row">Date joined</th>
                    <th scope="row">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM user"; // SELECT * FROM user    // CALL `getAllUsers`()
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { // row is an array c its columns
                        echo "<tr>";
                        echo "<td>" . $row["UserID"] . "</td>";
                        echo "<td>" . $row["UserName"] . "</td>";
                        echo "<td>" . $row["Position"] . "</td>";
                        echo "<td>" . $row["FullName"] . "</td>";
                        echo "<td>" . $row["Email"] . "</td>";
                        echo "<td>" . $row["JoinDate"] . "</td>";
                        echo '<td>
                                <form method="post" action="delete_user.php">
                                    <input type="hidden" name="user_id" value="' . $row["UserID"] . '">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <form method="post" action="reset_password.php">
                                    <input type="hidden" name="user_id" value="' . $row["UserID"] . '">
                                    <button type="submit" class="btn btn-primary">Reset Password</button>
                                </form>
                            </td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include_once "footer.php";
?>
