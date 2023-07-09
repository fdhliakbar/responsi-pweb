<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .product-image img {
        height: 400px;
    }
    </style>
</head>

<body>
    <section id="menu" class="menu">
        <h2>Menu</h2>
        <div class="row">
            <div class="menu-card">
                <img src="./components/assets/image/menu1.webp" alt="" class="menu-card-img" />
                <h3 class="menu-card-title">- Sushi -</h3>
                <p class="menu-card-price">IDR 200K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/menu2.jpg" alt="Ramen" class="menu-card-img" />
                <h3 class="menu-card-title">- Ramen -</h3>
                <p class="menu-card-price">IDR 125K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/menu3.jpg" alt="Tofu" class="menu-card-img" />
                <h3 class="menu-card-title">- Tofu -</h3>
                <p class="menu-card-price">IDR 25K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/menu4.webp" alt="Omelet" class="menu-card-img" />
                <h3 class="menu-card-title">- Omelet -</h3>
                <p class="menu-card-price">IDR 20K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/food1.jpg" alt="Onigiri" class="menu-card-img" />
                <h3 class="menu-card-title">- Onigiri -</h3>
                <p class="menu-card-price">IDR 18K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/menu5.jpg" alt="Takoyaki" class="menu-card-img" />
                <h3 class="menu-card-title">- Takoyaki -</h3>
                <p class="menu-card-price">IDR 30K</p>
            </div>
            <div class="menu-card">
                <img src="components/assets/image/menu6.jpg" alt="Dango" class="menu-card-img" />
                <h3 class="menu-card-title">- Dango -</h3>
                <p class="menu-card-price">IDR 12K</p>
            </div>
        </div>
    </section>
    <!-- Menu Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
        <h2><span>Menu</span> Terbaik</h2>
        <div class="row">
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="components/assets/image/menu6.jpg" alt="Product 1" />
                </div>
                <div class="product-content">
                    <h3>Dango</h3>
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
                    <img src="components/assets/image/menu5.jpg" alt="Product 1" />
                </div>
                <div class="product-content">
                    <h3>Takoyaki</h3>
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
                    <img src="components/assets/image/menu4.webp" alt="Product 1" />
                </div>
                <div class="product-content">
                    <h3>Omelet</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 20 <span>IDR 35K</span></div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-icons">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="components/assets/image/menu2.jpg" alt="Product 1" />
                </div>
                <div class="product-content">
                    <h3>Ramen</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 125K <span>IDR 180K</span></div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>