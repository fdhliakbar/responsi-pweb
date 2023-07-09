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
    <link rel="stylesheet" href="./components/css/login.css" />
    <script src="./components/js/home.js"></script>
</head>

<body>
    <!-- Navbar start -->
    <?php include './navbar.php' ?>
    <!-- navbar end -->

    <div class="container"></div>
    <div class="form-login">
        <h1>Register Form</h1>
        <?php include './database/db.php'; ?>
        <form id="loginForm" action="./database/insert_data.php" method="post" autocomplete="off">
            <div class="input-form">
                <input type="text" name="username" id="username" placeholder="Name" autofocus required minlength="3"
                    maxlength="120" oninvalid="this.setCustomValidity('Nama wajib di isi')"
                    oninput="this.setCustomValidity('')" />
            </div>
            <div class="input-form">
                <input type="email" name="email" id="email" placeholder="Email" required
                    oninvalid="this.setCustomValidity('Masukkan email anda')" oninput="this.setCustomValidity('')" />
            </div>
            <div class="input-form">
                <input type="password" name="password" id="password" placeholder="Password" required minlength="8"
                    maxLength="50" oninvalid="this.setCustomValidity('Password minimal 8 kata')"
                    oninput="this.setCustomValidity('')" />
            </div>
            <div class="center-btn">
                <button class="custom-btn" type="submit">Register</button>
            </div>
        </form>
        <div class="register">
            <p>Sudah punya akun?</p>
            <a href="./login.php">Login</a>
        </div>
    </div>

    <!-- Feather icons -->
    <script>
    feather.replace();
    </script>

    <script src="./components/js/login.js"></script>
</body>

</html>