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
        <div class="container py-4 py-xl-5" style="text-align: left;padding: 24px;"><a href="Panel.php">Back to Panel</a>
            <h1 class="text-start" data-aos="zoom-out" data-aos-duration="750" style="font-weight: bold;text-align: center;margin: 10px 0px 60px 0px;color: #43bc43;">Add Task</h1>
            <div class="row d-flex justify-content-lg-start register-form" data-aos="slide-up" data-aos-duration="750">
                <div class="col-sm-12 col-md-8 col-xl-12 offset-md-2 offset-xl-0 d-flex justify-content-start">
                    <form class="custom-form" style="width: 100%;height: 100%;margin: 0;padding: 0;">
                        <div class="row form-group">
                            <div class="col-sm-4 col-xl-2 label-column"><label class="col-form-label" for="name-input-field" style="font-size: 1rem;">Task title</label></div>
                            <div class="col-sm-6 col-md-7 col-xl-8 offset-xl-0 input-column"><input class="form-control" type="text" style="border-radius: 10px;"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 col-xl-2 label-column"><label class="col-form-label" for="email-input-field" style="font-size: 1rem;">Start</label></div>
                            <div class="col-sm-5 col-xl-3 input-column"><input class="form-control" type="date" style="border-radius: 10px;"></div>
                            <div class="col-sm-3 col-lg-2 col-xl-2"><input class="form-control" type="time" style="border-radius: 10px;height: 42px;"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 col-xl-2 label-column"><label class="col-form-label" for="pawssword-input-field" style="font-size: 1rem;">End</label></div>
                            <div class="col-sm-5 col-xl-3 input-column"><input class="form-control" type="date" style="border-radius: 10px;"></div>
                            <div class="col-sm-3 col-lg-2 col-xl-2"><input class="form-control" type="time" style="border-radius: 10px;height: 42px;"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 col-xl-2 label-column"><label class="col-form-label" for="repeat-pawssword-input-field" style="font-size: 1rem;">Repeat Task</label></div>
                            <div class="col-sm-6 input-column">
                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="border-radius: 10px;">Select</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">None</a><a class="dropdown-item" href="#">Every day</a><a class="dropdown-item" href="#">Every week</a><a class="dropdown-item" href="#">Every month</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-4 col-xl-2 label-column"><label class="col-form-label" for="dropdown-input-field" style="font-size: 1rem;">Task note</label></div>
                            <div class="col-sm-6 col-md-7 col-lg-7 col-xl-8 input-column"><textarea class="form-control" style="height: 70px;border-radius: 10px;"></textarea></div>
                        </div><button class="btn btn-light submit-button" type="button" style="background: #43bc43;border-radius: 10px;font-family: 'Nunito Sans', sans-serif;font-size: 30px;font-weight: initial;">Add Task</button>
                    </form>
                </div>
            </div>
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