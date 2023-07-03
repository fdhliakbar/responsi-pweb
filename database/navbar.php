<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="components/assets/image/logo/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="components/assets/image/logo/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../components/css/home.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <script defer src="../components/js/scroll.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Gomu <span>No Mi</span></a>

        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Contact</a>
            <a href="#login">Login</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        <!-- Search -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here..." />
            <label for="search-box"><i data-feather="search"></i></label>
        </div>

        <!-- Shopping cart -->
        <div class="shopping-cart">
            <div class="cart-item">
                <img src="components/assets/image/food2.jpg" alt="Product 1" />
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">IDR 30K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
            <div class="cart-item">
                <img src="components/assets/image/food2.jpg" alt="Product 1" />
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">IDR 30K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
            <div class="cart-item">
                <img src="components/assets/image/food2.jpg" alt="Product 1" />
                <div class="item-detail">
                    <h3>Product 1</h3>
                    <div class="item-price">IDR 30K</div>
                </div>
                <i data-feather="trash-2" class="remove-item"></i>
            </div>
        </div>
    </nav>
    <script src="../components/js/home.js"></script>
</body>

</html>