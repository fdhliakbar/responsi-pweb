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
    <?php include './navbar.php' ?>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>
                Japanese Food And Grocery Delivery Service In <span>Indonesia</span>
            </h1>
            <p>
                Kami menyediakan makanan dan bahan langsung dari Jepang. Untuk menjaga kualitas dan rasa.
            </p>
            <a href="#" class="cta">Buy now</a>
        </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
        <h2><span>About</span></h2>

        <div class="row">
            <div class="about-img">
                <img src="components/assets/image/food.jpg" alt="About us" />
            </div>
            <div class="content">
                <h3>Mengapa Produk Kami?</h3>
                <p>
                    Alasan mengapa produk buatan kami bisa bersaing dengan produk lain, karena semua bahan yang kami
                    gunakan itu segar di ambil langsung dari pertanian sekitar dan sebagian impor dari jepang yang telah
                    memenuhi standar pengiriman.
                </p>
                <p>
                    Inilah yang membuat produk kami mampu bersaing dengan makanan berkelas lainnya.
                </p>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section & Product Top Start -->
    <?php include './menu.php' ?>
    <!-- Menu Section & Product Top End -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <a href=""></a>
        <p>jika kamu merasa tertarik kamu bisa mengunjungi <a href="https://wa.me/6281379024149" target="_blank">kontak
                kami</a></p>

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
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <?php include './footer.php' ?>
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