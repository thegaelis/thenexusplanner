<?php
include_once "header.php";
//include_once "includes/login.inc.php";
include_once "includes/updateAccount.inc.php";

if(!logged_in()) {
    redirect("Login.php");
}

//echo var_dump("<p>password:</p>".$_SESSION['hashedpassword'])."<br>"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Account | The Nexus Planner</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
</head>

<body>
    <div class="container" data-aos="zoom-out" data-aos-duration="750">

      <?php display_message(); ?>

      <h1 class="text-center" style="font-family: 'Nunito Sans', sans-serif;">Manage Account</h1>
      <div class="container">
        <div class="row gutters">
          <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
              <div class="card-body">
                <div class="account-settings">
                  <div class="user-profile">
                    <div class="user-avatar">
                      <!-- <img src="assets/img/nexus_icon.jpg" alt="User"> -->
                      <img src="https://github.com/entykey.png" alt="User" />
                    </div>
                    <h5 class="full-name"><?php echo $_SESSION['fullname']; ?></h5>
                    <h6 class="user-name"><?php echo '@'.$_SESSION['username']; ?></h6>
                    <h6 class="user-email"><?php echo $_SESSION['email']; ?></h6>
                  </div>
                  <div class="about">
                    <h5>About</h5>
                    <p><?php echo $_SESSION['bio']; ?></p>
                  </div>
                  <div class="about">
                    <h5>Date Joined</h5>
                    <p><?php echo $_SESSION['datejoined']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <form method="post" class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
              <div class="card-body">
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <p class="mb-2 text-warning">Note: If you don't want to change your password, enter your current password and leave the new password and re-enter new password empty</p>
                  </div>
                 </div>
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Update Personal Details</h6>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="fullName">Full Name</label>
                      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" value="<?php echo $_SESSION["fullname"]; ?>">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="eMail">Email</label>
                      <input type="email" class="form-control" id="eMail" name="eMail" placeholder="Enter email ID" value="<?php echo $_SESSION['email']; ?>">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="Bio">Bio</label>
                      <input 
                        type="text" class="form-control" id="bio" name="bio" placeholder="Enter your biography"  value="<?php echo $_SESSION['bio']; ?>"
                        
                        >
                    </div>
                  </div>

                <div class="column gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mt-3 mb-2 text-primary">Change Password</h6>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="OldPassword">Current Password</label>
                      <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Enter Current Password">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="NewPassword">New Password</label>
                      <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="Enter New Password">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="ReNewPassword">Re-enter New Password</label>
                      <input type="password" class="form-control" id="ConfirmNewPassword" name="ConfirmNewPassword" placeholder="Re-enter New Password">
                    </div>
                  </div>
                </div>
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                    <div class="text-right">
                      <button type="submit" id="submit" name="submit" class="btn btn-primary rounded-9">Update</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
	<?php
		include_once "footer.php";
	?>
	
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
