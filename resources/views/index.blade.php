@extends('layouts.app')
@section('content')

    <section class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content"
                        style="background: url(../../images/shop/banner/grocery/banner.jpg) no-repeat center; background-size: cover;">
                        <h1>get your grocery items quickly.</h1>
                        <p>We are always ready to deliver product to your doorstep every day</p>
                        <form class="banner-form">
                            <div class="select-option">
                                <i class="icon icofont-grocery"></i>
                                <span class="text">grocery</span>
                                <ul class="option-list">
                                    <li>
                                        <a href="index.html">
                                            <i class="icofont-grocery"></i>
                                            <span>grocery</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mironmahmud.com/ecomart/assets/ltr/html/bakery/index.html">
                                            <i class="icofont-cup-cake"></i>
                                            <span>bakery</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mironmahmud.com/ecomart/assets/ltr/html/clothes/index.html">
                                            <i class="icofont-jacket"></i>
                                            <span>clothes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mironmahmud.com/ecomart/assets/ltr/html/gadgets/index.html">
                                            <i class="icofont-camera"></i>
                                            <span>gadgets</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mironmahmud.com/ecomart/assets/ltr/html/furniture/index.html">
                                            <i class="icofont-chair"></i>
                                            <span>furniture</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://mironmahmud.com/ecomart/assets/ltr/html/cosmetics/index.html">
                                            <i class="icofont-paint"></i>
                                            <span>cosmetics</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <input type="text" placeholder="Search anything...">
                            <button type="submit">
                                <i class="icofont-ui-search"></i>
                                <span>search</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="promo-part">
        <div class="container">
            <ul class="promo-slider slider-arrow">
                <li>
                    <a href="#">
                        <img src="../../images/promo/01.jpg" alt="promo">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../../images/promo/02.jpg" alt="promo">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../../images/promo/03.jpg" alt="promo">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../../images/promo/04.jpg" alt="promo">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="product-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-category">
                        <ul class="cate-list">
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-vegetable"></i>
                                    <span>vegetables</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">asparagus</a>
                                    </li>
                                    <li>
                                        <a href="#">broccoli</a>
                                    </li>
                                    <li>
                                        <a href="#">carrot</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-fruit"></i>
                                    <span>fruits</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Apple</a>
                                    </li>
                                    <li>
                                        <a href="#">Orange</a>
                                    </li>
                                    <li>
                                        <a href="#">Strawberry</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-fish"></i>
                                    <span>fishes</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">elish</a>
                                    </li>
                                    <li>
                                        <a href="#">pangash</a>
                                    </li>
                                    <li>
                                        <a href="#">telapiya</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-barbecue"></i>
                                    <span>meats</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">beaf</a>
                                    </li>
                                    <li>
                                        <a href="#">chiken</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-crab"></i>
                                    <span>sea foods</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Lobster</a>
                                    </li>
                                    <li>
                                        <a href="#">Octopus</a>
                                    </li>
                                    <li>
                                        <a href="#">Shrimp</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-salad"></i>
                                    <span>vegan foods</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Legumes</a>
                                    </li>
                                    <li>
                                        <a href="#">Seaweed</a>
                                    </li>
                                    <li>
                                        <a href="#">Sprouted</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-dried-fruit"></i>
                                    <span>dry foods</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Almond</a>
                                    </li>
                                    <li>
                                        <a href="#">Betel nut</a>
                                    </li>
                                    <li>
                                        <a href="#">Cashew</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-cheers"></i>
                                    <span>drinks</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Lemonade</a>
                                    </li>
                                    <li>
                                        <a href="#">Milkshake</a>
                                    </li>
                                    <li>
                                        <a href="#">water</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-dairy-products"></i>
                                    <span>dairy farm</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">egge</a>
                                    </li>
                                    <li>
                                        <a href="#">milk</a>
                                    </li>
                                    <li>
                                        <a href="#">butter</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-wheat-sack"></i>
                                    <span>rices</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Finger Millet</a>
                                    </li>
                                    <li>
                                        <a href="#">Flattened Rice</a>
                                    </li>
                                    <li>
                                        <a href="#">Gram Flour</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="cate-link dropdown" href="#">
                                    <i class="flaticon-beverage"></i>
                                    <span>snacks</span>
                                </a>
                                <ul class="dropdown-list">
                                    <li>
                                        <a href="#">Onion rings</a>
                                    </li>
                                    <li>
                                        <a href="#">Piattos</a>
                                    </li>
                                    <li>
                                        <a href="#">Sev mamra</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-filter">
                                <div class="product-filter-short">
                                    <label class="form-label">short by:</label>
                                    <select class="form-select">
                                        <option value="default">default</option>
                                        <option value="new">new product</option>
                                        <option value="discount">discount product</option>
                                    </select>
                                </div>
                                <ul class="product-filter-list">
                                    <li>
                                        <button class="column-3" data-toggle="tooltip" title="Three Column">
                                            <i class="icofont-justify-all"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="column-4" data-toggle="tooltip" title="Four Column">
                                            <i class="icofont-indent"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/01.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/02.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/03.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card product-disable">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/04.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/05.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/06.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/07.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/08.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/09.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/10.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/11.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card product-disable">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/12.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/13.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/14.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/15.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/16.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/17.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/18.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card product-disable">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/19.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/20.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/21.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/22.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/23.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <div class="product-card">
                                <figure class="product-media">
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                        <label class="product-label label-off">-10%</label>
                                    </div>
                                    <a class="product-image" href="product-single.html">
                                        <img src="../../images/shop/product/grocery/24.jpg" alt="product">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h5 class="product-price">
                                        <span>
                                            $25
                                            <small>/kilo</small>
                                        </span>
                                        <del>$42</del>
                                    </h5>
                                    <h5 class="product-name">
                                        <a href="product-single.html">product name</a>
                                    </h5>
                                    <div class="product-action-group">
                                        <div class="product-action">
                                            <button class="action-wish" title="Product Wish">
                                                <i class="icofont-ui-love"></i>
                                            </button>
                                            <button class="action-cart" title="Add to Cart">
                                                <span>add to cart</span>
                                            </button>
                                            <button class="action-view" title="Product View" data-toggle="modal"
                                                data-target="#product-view">
                                                <i class="icofont-eye-alt"></i>
                                            </button>
                                        </div>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus">
                                                <i class="icofont-minus"></i>
                                            </button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="load-btn">
                                <button class="btn btn-outline">Load more items</button>
                            </div>
                            <div class="footer-part">
                                <p>
                                    Ecomart | &COPY; Copyright by
                                    <a href="#">Mironcoder</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
