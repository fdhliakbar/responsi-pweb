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
    <link rel="stylesheet" href="./components/css/home.css" />
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Gomu <span>No Mi</span></a>

        <div class="navbar-nav">
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Contact</a>
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
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>
                Japanese Food And Grocery Delivery Service In <span>Indonesia</span>
            </h1>
            <p>
                We provide food and ingredients directly from japan. To maintain
                quality and taste.
            </p>
            <a href="#" class="cta">Buy now</a>
        </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
        <h2><span>About</span> Us</h2>

        <div class="row">
            <div class="about-img">
                <img src="components/assets/image/food.jpg" alt="About us" />
            </div>
            <div class="content">
                <h3>Why choose our product?</h3>
                <p>
                    the answer is because all the ingredients are fresh, every day new
                    ingredients, new fish from the sea, fresh vegetables picked from the
                    farm and so on. If you don't run out, throw it out at midnight.
                </p>
                <p>
                    This is what makes our products able to compete with other classy
                    foods.
                </p>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
        <h2><span>Our</span> Menu</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita,
            repellendus numquam quam tempora voluptatum.
        </p>

        <div class="row">
            <div class="menu-card">
                <img src="components/assets/image/food1.jpg" alt="Sushi" class="menu-card-img" />
                <h3 class="menu-card-title">- Sushi -</h3>
                <p class="menu-card-price">IDR 200K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/food1.jpg" alt="Sushi" class="menu-card-img" />
                <h3 class="menu-card-title">- Sushi -</h3>
                <p class="menu-card-price">IDR 200K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/food1.jpg" alt="Sushi" class="menu-card-img" />
                <h3 class="menu-card-title">- Sushi -</h3>
                <p class="menu-card-price">IDR 200K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/food1.jpg" alt="Sushi" class="menu-card-img" />
                <h3 class="menu-card-title">- Sushi -</h3>
                <p class="menu-card-price">IDR 200K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/food1.jpg" alt="Sushi" class="menu-card-img" />
                <h3 class="menu-card-title">- Sushi -</h3>
                <p class="menu-card-price">IDR 200K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/food1.jpg" alt="Sushi" class="menu-card-img" />
                <h3 class="menu-card-title">- Sushi -</h3>
                <p class="menu-card-price">IDR 200K</p>
            </div>
        </div>
    </section>
    <!-- Menu Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
        <h2><span>Our Superior</span> Product</h2>
        <div class="row">
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="components/assets/image/food2.jpg" alt="Product 1" />
                </div>
                <div class="product-content">
                    <h3>Matcha tea</h3>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="components/assets/image/food2.jpg" alt="Product 1" />
                </div>
                <div class="product-content">
                    <h3>Matcha tea</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="components/assets/image/food2.jpg" alt="Product 1" />
                </div>
                <div class="product-content">
                    <h3>Matcha tea</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
        <h2><span>Contact</span> Us</h2>
        <p>If you are interested can visit contact us.</p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3114.6133966201533!2d110.3819006767377!3d-7.831787248532896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5701a2ae1c23%3A0x173dbeeddc56d9e!2sUniversitas%20Ahmad%20Dahlan%20-%20Kampus%204!5e0!3m2!1sid!2sid!4v1683354359288!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <!-- form validation -->
            <form id="form" action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input id="username" name="username" type="text" placeholder="name" />
                    <div class="error"></div>
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input id="email" name="email" type="text" placeholder="email" />
                    <div class="error"></div>
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input id="phone-number" name="phone-number" type="text" placeholder="phone number" />
                    <div class="error"></div>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="https://www.instagram.com/" target="_blank"><i data-feather="instagram"></i></a>
            <a href="https://github.com/fdhliakbar" target="_blank"><i data-feather="github"></i></a>
            <a href="#"><i data-feather="linkedin"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">Muhamad Fadhli Akbar</a> || &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Modal Box Item Detail start -->
    <div class="modal" id="item-detail-modal">
        <div class="modal-container">
            <a href="#" class="close-icon"><i data-feather="x"></i></a>
            <div class="modal-content">
                <img src="components/assets/image/food2.jpg" alt="Product 1" />
                <div class="product-content">
                    <h3>Product 1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Provident, tenetur cupiditate facilis obcaecati ullam maiores
                        minima quos perspiciatis similique itaque, esse rerum eius
                        repellendus voluptatibus!
                    </p>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                    <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box Item Detail end -->

    <!-- Feather icons -->
    <script>
    feather.replace();
    </script>

    <!-- Javascript file -->
    <script src="./components/js/home.js"></script>
</body>

</html>