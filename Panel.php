<?php
include_once "header.php";
include_once "includes/login.inc.php";

if(!logged_in()) {
    redirect("Login.php");
}
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
    <link rel="stylesheet" href="assets/css/Dark-Mode-Switch.css">
    <link rel="stylesheet" href="assets/css/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap-file-input.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
</head>

<body>

    <!--
	<nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: #FFFFFF;"><img src="assets/img/nexus_icon.jpg" style="width: 4rem;height: 4rem;"></span><span style="font-family: 'Nunito Sans', sans-serif;">NeXuS Planner</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2" style="display: none;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><span>Fri, March 25&nbsp; &nbsp; <br>01:04:00 PM</span>
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
            </div><img style="border-radius: 50%;background: url(&quot;https://avatars.githubusercontent.com/u/89012668?v=4&quot;);width: 50px;height: 50px;margin: 0px 10px 0px;" src="assets/img/nexus_icon.jpg">
            <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="Panel.php">@demo&nbsp;</a>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">Demo</a><a class="dropdown-item" href="manageAccount.php">Manage Account</a><a class="dropdown-item" href="Preset.php">Preset</a><a class="dropdown-item" href="index.php">Log Out</a></div>
            </div>
        </div>
    </nav>
	-->
	
    <section class="py-5 mt-5" style="background: var(--bs-card-cap-bg);">
        <div class="container d-flex flex-column align-items-center py-4 py-xl-5" style="text-align: left;padding: 24px;">
            <h1 data-aos="fade-up" data-aos-duration="750" style="font-weight: bold;text-align: center;margin: 10px 0px 60px 0px;color: #43bc43;">Your tasks</h1>
            <div class="row text-center" data-aos="zoom-in" data-aos-duration="750">
                <div class="col text-center d-flex d-lg-flex flex-column flex-sm-column justify-content-sm-center flex-md-column justify-content-md-center flex-lg-row justify-content-lg-center flex-xl-row flex-xxl-row" style="align-items: center;display: flex;">
                    <div class="card text-start" style="border-radius: 25px;margin: 20px 10px 20px 10px;box-shadow: 0px 0px 20px 9px rgba(17, 17, 26, 0.1);border-style: none;padding: 28px;width: 346px;background: #ec6a5e;color: #fff;height: 300px;">
                        <div class="card-body" style="text-align: left;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-tornado" style="font-size: 30px;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="21" y1="4" x2="3" y2="4"></line>
                                <line x1="13" y1="16" x2="7" y2="16"></line>
                                <line x1="11" y1="20" x2="15" y2="20"></line>
                                <line x1="6" y1="8" x2="20" y2="8"></line>
                                <line x1="4" y1="12" x2="16" y2="12"></line>
                            </svg>
                            <h4 class="card-title" style="font-weight: bold;">In Progress</h4>
                            <p class="card-text">1 tasks that are now occurring.</p>
                            <div id="InProgress_Task_peek">
                                <p id="InProgress_Task_peek_Title" style="font-weight: bold;color: #FFFFFF;">Complete CSS style for a web</p>
                                <p id="InProgress_Task_peek_Title">Due: Sat, March 25 11:59:59 PM</p>
                            </div><a class="card-link" href="taskInProgress.php" style="color: #FFFFFF;">View more</a>
                        </div>
                    </div>
                    <div class="card text-start" style="border-radius: 25px;margin: 20px 10px 20px 10px;box-shadow: 0px 0px 20px 9px rgba(17, 17, 26, 0.1);border-style: none;padding: 28px;width: 346px;background: #2e6cba;color: #fff;height: 300px;">
                        <div class="card-body" style="text-align: left;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-bar-to-down" style="font-size: 30px;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="4" y1="20" x2="20" y2="20"></line>
                                <line x1="12" y1="14" x2="12" y2="4"></line>
                                <line x1="12" y1="14" x2="16" y2="10"></line>
                                <line x1="12" y1="14" x2="8" y2="10"></line>
                            </svg>
                            <h4 class="card-title" style="font-weight: bold;">Upcoming</h4>
                            <p class="card-text">1 upcoming task</p>
                            <div id="InProgress_Task_peek-1">
                                <p id="InProgress_Task_peek_Title-1" style="font-weight: bold;color: #FFFFFF;">Project Wrapup</p>
                                <p><a href="taskUpcoming.php"><span style="color: rgb(255, 255, 255);">Due: Wed, Apr 5 11:59:59 PM</span></a></p>
                            </div><a class="card-link" href="taskUpcoming.php" style="color: #FFFFFF;">View more</a>
                        </div>
                    </div>
                    <div class="card text-start" style="border-radius: 25px;margin: 20px 10px 20px 10px;box-shadow: 0px 0px 20px 9px rgba(17, 17, 26, 0.1);border-style: none;padding: 28px;width: 346px;background: #f6c744;color: #ffff;height: 300px;">
                        <div class="card-body"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-stack" style="font-size: 30px;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="12 4 4 8 12 12 20 8 12 4"></polyline>
                                <polyline points="4 12 12 16 20 12"></polyline>
                                <polyline points="4 16 12 20 20 16"></polyline>
                            </svg>
                            <h4 class="card-title" style="font-weight: bold;">Done</h4>
                            <p class="card-text">10 tasks done.</p>
                            <div id="InProgress_Task_peek-2">
                                <p id="InProgress_Task_peek_Title-2" style="font-weight: bold;color: #FFFFFF;">Lorem ipsum</p>
                                <p>Done: Sat, Feb 20</p>
                            </div><a class="card-link" href="taskDone.php" style="color: #FFFFFF;">View more</a>
                        </div>
                    </div>
                </div>
            </div><a class="btn btn-primary btn-lg text-center d-flex justify-content-center align-items-center" role="button" data-aos="fade-down" data-aos-duration="750" style="height: 5rem;width: 20rem;font-size: 2rem;font-family: 'Nunito Sans', sans-serif;border-radius: 15px;background: #43bc43;margin-top: 60px;" href="addTask.php">Add Task</a>
        </div>
    </section>
	
    <?php
		include_once "footer.php";
	?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Dark-Mode-Switch-darkmode.js"></script>
    <script src="assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap-fileinput.js"></script>
</body>

</html>