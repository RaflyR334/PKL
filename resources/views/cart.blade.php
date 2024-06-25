@extends('layouts.front')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./front/assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Shopus | Cart</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="./front/css/swiper10-bundle.min.css">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="./front/css/bootstrap-5.3.2.min.css">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="front/css/nouislider.min.css">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="front/css/aos-3.0.0.css">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="./front/css/style.css">



</head>

<body>


    <!--------------- blog-tittle-section---------------->
    <section class="blog about-blog">
        <div class="container">
            <div class="blog-bradcrum">
                <span><a href="index.html">Home</a></span>
                <span class="devider">/</span>
                <span><a href="#">Cart</a></span>
            </div>
            <div class="blog-heading about-heading">
                <h1 class="heading">Cart</h1>
            </div>
        </div>
    </section>
    <!--------------- blog-tittle-section-end---------------->

    <!--------------- cart-section---------------->
    <section class="product-cart product footer-padding">
        <div class="container">
            <div class="cart-section">
                <table>
                    <tbody>
                        <tr class="table-row table-top-row">
                            <td class="table-wrapper wrapper-product">
                                <h5 class="table-heading">PRODUCT</h5>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">PRICE</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">QUANTITY</h5>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">TOTAL</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="table-heading">ACTION</h5>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row ticket-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="./front/assets/images/homepage-one/product-img/product-img-1.webp"
                                            alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Classic Oxford Shirt</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$10.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <div class="quantity">
                                        <span class="minus">
                                            -
                                        </span>
                                        <span class="number">1</span>
                                        <span class="plus">
                                            +
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$60.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                fill="#AAAAAA"></path>
                                        </svg>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row ticket-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="./front/assets/images/homepage-one/product-img/product-img-2.webp"
                                            alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading"> black Shirt</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$05.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <div class="quantity">
                                        <span class="minus">
                                            -
                                        </span>
                                        <span class="number">1</span>
                                        <span class="plus">
                                            +
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$10.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper ">
                                <div class="table-wrapper-center">
                                    <span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                fill="#AAAAAA"></path>
                                        </svg>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row ticket-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="./front/assets/images/homepage-one/product-img/product-img-3.webp"
                                            alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Blue Party Shirt</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$30.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <div class="quantity">
                                        <span class="minus">
                                            -
                                        </span>
                                        <span class="number">1</span>
                                        <span class="plus">
                                            +
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$50.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                fill="#AAAAAA"></path>
                                        </svg>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-row ticket-row">
                            <td class="table-wrapper wrapper-product">
                                <div class="wrapper">
                                    <div class="wrapper-img">
                                        <img src="./front/assets/images/homepage-one/product-img/product-img-4.webp"
                                            alt="img">
                                    </div>
                                    <div class="wrapper-content">
                                        <h5 class="heading">Red Party Dress</h5>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$20.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <div class="quantity">
                                        <span class="minus">
                                            -
                                        </span>
                                        <span class="number">1</span>
                                        <span class="plus">
                                            +
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="table-wrapper wrapper-total">
                                <div class="table-wrapper-center">
                                    <h5 class="heading">$40.00</h5>
                                </div>
                            </td>
                            <td class="table-wrapper">
                                <div class="table-wrapper-center">
                                    <span>
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                                fill="#AAAAAA"></path>
                                        </svg>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="wishlist-btn cart-btn">
                <a href="empty-cart.html" class="clean-btn">Clear Cart</a>
                <a href="#" class="shop-btn update-btn">Update Cart</a>
                <a href="checkout.html" class="shop-btn">Proceed to Checkout</a>
            </div>
        </div>
    </section>
    <!--------------- cart-section-end---------------->







    <!--------------- jQuery ---------------->
    <script src="front/assets/js/jquery_3.7.1.min.js"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="front/assets/js/bootstrap_5.3.2.bundle.min.js"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="front/assets/js/nouislider.min.js"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="front/assets/js/aos-3.0.0.js"></script>

    <!--------------- swiper-js ---------------->
    <script src="front/assets/js/swiper10-bundle.min.js"></script>

    <!--------------- additional-js ---------------->
    <script src="front/assets/js/shopus.js"></script>


</body>

</html>
@endsection
