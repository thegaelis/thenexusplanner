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
    <section class="py-5 mt-5" style="background: var(--bs-card-cap-bg);">
        <div class="container py-4 py-xl-5" style="text-align: left;padding: 24px;">
            <h1 style="font-weight: bold;text-align: center;margin: 10px 0px 60px 0px;color: #43bc43;">Your tasks</h1>
            <div class="row text-center" data-aos="zoom-in-up" data-aos-duration="750">
                <div class="col text-center d-lg-flex justify-content-sm-center justify-content-md-center justify-content-lg-center" style="align-items: center;display: flex;">
                    <div class="card text-start" style="border-radius: 25px;margin: 20px 10px 20px 10px;box-shadow: 0px 0px 20px 9px rgba(17, 17, 26, 0.1);border-style: none;padding: 28px;width: 100%;background: #2e6cba;color: #fff;height: 100%;">
                        <div class="card-body" style="text-align: left;"><a class="card-link" href="Panel.php" style="padding: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;margin-bottom: 24px;color: #FFFFFF;">Back to Panel</a>
                            <h4 class="card-title" style="font-weight: bold;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-bar-to-down" style="font-size: 30px;">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="20" x2="20" y2="20"></line>
                                    <line x1="12" y1="14" x2="12" y2="4"></line>
                                    <line x1="12" y1="14" x2="16" y2="10"></line>
                                    <line x1="12" y1="14" x2="8" y2="10"></line>
                                </svg>&nbsp; &nbsp;Upcoming</h4>
                            <p class="card-text">1 upcoming task</p>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: #000000;">Project Wrapup</h4>
                                    <h6 class="text-muted card-subtitle mb-2">Due: <span style="color: rgb(0, 0, 0); background-color: rgba(255, 255, 255, 0.5);">Wed, April 5</span>&nbsp; &nbsp; &nbsp; 10 days, 20 hours left</h6><a class="card-link" href="taskView.php">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
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