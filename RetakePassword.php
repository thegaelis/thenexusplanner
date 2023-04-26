<?php
include_once "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5" data-aos="fade-down" data-aos-duration="750">
                <div class="col-md-8 col-lg-8 col-xl-6 text-center mx-auto">
                    <h2>Retake your password</h2>
                    <p>Enter your account email. <br>We'll check and then we will send a link to retake your password</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-duration="750">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: #43bc43;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Your Account Email"></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: #43bc43;">Send retake link</button></div>
                            </form><a href="Login.php" style="color: #000000;">Back to Login</a><a href="Register.php" style="color: #000000;">Don't have an account? Create one!</a>
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
</body>

</html>