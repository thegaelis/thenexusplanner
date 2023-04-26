<?php
include_once "header.php";
include_once "includes/register.inc.php";

if(logged_in()) {
    redirect("Panel.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register | The Nexus Planner</title>
    <meta name="description" content="Join us to start planning and working today">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark-Multi-Column-icons.css">
</head>

<body>

	<!--
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.html"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: #FFFFFF;"><img src="assets/img/nexus_icon.jpg" style="width: 4rem;height: 4rem;"></span><span style="font-family: 'Nunito Sans', sans-serif;">NeXuS Planner</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Back to Homepage</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
	-->
	
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-down" data-aos-duration="750">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Register</h2>
                    <p>Join us to start your great work more efficent</p>
                </div>
            </div>

            <?php display_message(); ?>


            <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-duration="750">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: #43bc43;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="text" name="fullname" placeholder="Your Name"></div>
                                <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Your Username"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Your Password"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="confirmpassword" placeholder="Re-enter Your Password"></div>
                                <div class="mb-3"></div><button class="btn btn-primary d-block w-100" type="submit" style="background: #43bc43;">Register</button>
                            </form><a href="Login.php" style="color: #000000;">Already have an account? Log in!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<?php
		include_once "footer.php";
	?>
	
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>