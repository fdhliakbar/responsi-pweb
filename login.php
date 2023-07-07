<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delivery Ordering Website</title>
    <link rel="icon" href="components/assets/image/logo/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="components/assets/image/logo/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="./components/css/login.css">
    <script src="./components/js/home.js"></script>
</head>

<body>
    <!-- Navbar start -->
    <?php include './navbar.php' ?>
    <!-- navbar end -->

    <div class="container"></div>
    <div class="form-login">
        <h1>Login Form</h1>
        <form id="loginForm" action="process_login.php" method="post" autocomplete="off">
            <div class="input-form">
                <input type="text" name="username" id="username" placeholder="Name" autofocus requires minLength="3"
                    maxLength="120" oninvalid="this.setCustomValidity('Wajib di isi mas')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="input-form">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="center-btn">
                <button class="custom-btn" type="submit">Login</button>
            </div>
        </form>
        <div class="register">
            <p>Belum punya akun? </p>
            <a href="./register.php">Register</a>
        </div>
    </div>




    <!-- Feather icons -->
    <script>
    feather.replace();
    </script>


    <script src="./components/js/login.js"></script>
</body>

</html>