<?php
include_once "includes/init.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Demo's Home | The Nexus Planner</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center" href="index.php">
            <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: #FFFFFF;">
              <img src="assets/img/nexus_icon.jpg" style="width: 4rem;height: 4rem;">
            </span>
            <span style="font-family: 'Nunito Sans', sans-serif;">NeXuS Planner</span>
          </a>
          <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2" style="display: none;">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
		  
          <span>
			<?php
				// date_default_timezone_set("Asia/Ho_Chi_Minh");
				// echo date("h:i:sa");
        
        function getCurrentDateTime() {          
          $dateTime = date("D, F j h:i:s A"); // Format the current date and time
          return $dateTime;
        }
      
        echo getCurrentDateTime(); // Output: Fri, March 25 01:04:00 PM
			?>
		  </span>
		  
          <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"></li>
              <li class="nav-item"></li>
              <li class="nav-item"></li>
              <li class="nav-item"></li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item"></li>
              <li class="nav-item"></li>
              <li class="nav-item"></li>
            </ul>
          </div>
          <!-- account menu -->
          <!-- avatar --> <?php if(logged_in()) : ?> <img style="border-radius: 50%; width: 50px;height: 50px;margin: 0px 10px 0px;" src="https://github.com/entykey.png">
          <!-- end of avatar -->
          <div class="dropdown">
            <a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="Panel.php"><?php echo $_SESSION['username'] ?> &nbsp;</a>
            <div class="dropdown-menu">
              <!-- <a class="dropdown-item" href="#">Demo</a> -->
              <a class="dropdown-item" href="manageAccount.php">Manage Account</a>
              <a class="dropdown-item" href="Preset.php">Preset</a>
              <a class="dropdown-item" href="index.php">Home</a>
              <?php if(!logged_in()) : ?> <li>
                <a class="dropdown-item" href="Login.php">Login</a>
              </li>
              <?php else : ?> <a class="dropdown-item" href="logout.php">Logout</a>
                <?php if ($_SESSION['position'] == 'Admin') : ?>
                  <a class="dropdown-item" href="users.php">Users (admin only)</a>
                <?php endif; ?>
               <?php endif; ?>
            </div>
          </div>
          <!-- end of account menu --> <?php else : ?> <?php endif; ?>
        </div>
      </nav>
    </div>
	  