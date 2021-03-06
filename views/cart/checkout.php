<?php include(ROOT . '/views/layouts/header.php');?>
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Оформление заказа</h2>
                        <p><a href="/">На главную</a> | Оформление заказа</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout content section start -->
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="coupon-accordion">
                        <h3>Returning customer?  <span id="showcoupon3">Click here to login</span></h3>
                        <div id="checkout_coupon3" class="coupon-checkout-content">
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                            <div class="coupon-info top1">
                                <form action="#">
                                    <p class="checkout-coupon top">
                                        <label class="l-contact">
                                            Username or email
                                            <em>*</em>
                                        </label>
                                        <input type="email" />
                                    </p>
                                    <p class="checkout-coupon top-down">
                                        <label class="l-contact">
                                            password
                                            <em>*</em>
                                        </label>
                                        <input type="password" />
                                    </p>
                                    <div class="cop-left">
                                        <input type="submit" value="login" />
                                        <label class="inline">
                                            <input type="checkbox" name="rememberme">
                                            Remember me
                                        </label>
                                    </div>
                                    <p class="lost_password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="coupon-accordion res">
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content tnm">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon res">
                                        <input type="text" placeholder="Coupon code" />
                                        <input type="submit" value="Apply Coupon" />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="text">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active ano complete">
                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab"></a>
                                <span>Address</span>
                            </li>
                            <li role="presentation" class="ano ">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"></a>
                                <span>Payment</span>
                            </li>
                            <li role="presentation" class="ano la">
                                <a href="#message" aria-controls="message" role="tab" data-toggle="tab"></a>
                                <span>Complete</span>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <form action="#">
                                        <div class="checkbox-form">
                                            <div class="col-md-12">
                                                <h3 class="checkbox9">SHIPPING ADDRESS DETAILS</h3>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        First Name
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Last Name
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Company Name
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Email Address
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="email" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Phone
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="tel" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="country-select">
                                                    <label class="l-contact">
                                                        Country
                                                        <em>*</em>
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Bangladesh</option>
                                                        <option>Albania</option>
                                                        <option>Åland Islands</option>
                                                        <option>Afghanistan</option>
                                                        <option>Belgium</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="l-contact">
                                                    Address
                                                    <em>*</em>
                                                </label>
                                                <div class="di-na bs">
                                                    <input class="form-control" type="text" required="" name="name"  placeholder="Street address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="di-na bs tana">
                                                    <input class="form-control" type="text" required="" name="name" placeholder="Apartment, suite, unit etc. (optional)">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="l-contact">
                                                    Town / City
                                                    <em>*</em>
                                                </label>
                                                <div class="di-na bs">
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="country-select">
                                                    <label class="l-contact">
                                                        District
                                                        <em>*</em>
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>mymensingh</option>
                                                        <option>dhaka</option>
                                                        <option>khulna</option>
                                                        <option>kumillah</option>
                                                        <option>chadpur</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Postcode / ZIP
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="checkbox9">SHIP TO A DIFFERENT ADDRESS?</h3>
                                        <div id="showcoupon2">
                                            <input class="input-checkbox" type="checkbox">
                                        </div>
                                    </div>
                                    <div id="checkout_coupon2" class="coupon-checkout-content2">
                                        <div class="checkbox-form">
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        First Name
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Last Name
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Company Name
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Email Address
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="email" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Phone
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="tel" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="country-select">
                                                    <label class="l-contact">
                                                        Country
                                                        <em>*</em>
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Bangladesh</option>
                                                        <option>Albania</option>
                                                        <option>Åland Islands</option>
                                                        <option>Afghanistan</option>
                                                        <option>Belgium</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="l-contact">
                                                    Address
                                                    <em>*</em>
                                                </label>
                                                <div class="di-na bs">
                                                    <input class="form-control" type="text" required="" name="name"  placeholder="Street address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="di-na bs tana">
                                                    <input class="form-control" type="text" required="" name="name" placeholder="Apartment, suite, unit etc. (optional)">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="l-contact">
                                                    Town / City
                                                    <em>*</em>
                                                </label>
                                                <div class="di-na bs">
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="country-select">
                                                    <label class="l-contact">
                                                        District
                                                        <em>*</em>
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>mymensingh</option>
                                                        <option>dhaka</option>
                                                        <option>khulna</option>
                                                        <option>kumillah</option>
                                                        <option>chadpur</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="di-na bs">
                                                    <label class="l-contact">
                                                        Postcode / ZIP
                                                        <em>*</em>
                                                    </label>
                                                    <input class="form-control" type="text" required="" name="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="di-na bs">
                                            <label class="l-contact">
                                                Order Notes
                                            </label>
                                            <textarea class="input-text " placeholder="Notes about your order, e.g. special notes for delivery." name="order_comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <p class="checkout-coupon">
                                            <input type="submit" value="CONTINUE">
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="top-check-text">
                                            <div class="check-down">
                                                <h3 class="checkbox9">INFORMATION</h3>
                                                <span><a class="ro-edit-customer-info" href="#">Edit</a></span>
                                            </div>
                                            <div class="ro-content2">
                                                <div class="ro-info2">
                                                    <p>
                                                        <span>Email Address: </span>
                                                        tasnimakter903@yahoo.com
                                                    </p>
                                                </div>
                                                <div class="ro-info2">
                                                    <p>
                                                        <span>Country: </span>
                                                        BD
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="#" class="all-payment">
                                            <div class="all-paymet-border">
                                                <div class="payment-method">
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                                        <label for="payment_method_1"> Direct Bank Transfer </label>
                                                        <div class="payment_box payment_method_bacs">
                                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                        <label for="payment_method_2"> Cheque Payment  </label>
                                                        <div class="payment_box payment_method_bacs">
                                                            <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </div>
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                        <label for="payment_method_3">PayPal <img alt="" src="/template/img/icon-img/44.png"><a href="#">What is PayPal?</a></label>
                                                        <div class="payment_box payment_method_bacs">
                                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row place-order">
                                                    <input class="button alt" type="submit" value="Place order" >
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="message">
                                <div class="last-check">
                                    <h3 class="checkbox9">complete</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="ro-checkout-summary">
                        <div class="ro-title">
                            <h3 class="checkbox9">ORDER SUMMARY</h3>
                        </div>
                        <div class="ro-body">
                            <div class="ro-item">
                                <div class="ro-image">
                                    <a href="#">
                                        <img src="/template/img/products/c15.jpg" alt="">
                                    </a>
                                </div>
                                <div>
                                    <div class="tb-beg">
                                        <a href="#">Luxury Leather Bag </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="ro-price">
                                        <span class="amount">$99.00</span>
                                    </div>
                                    <div class="ro-quantity">
                                        <strong class="product-quantity">× 1</strong>
                                    </div>
                                    <div class="product-total">
                                        <span class="amount">$99.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ro-footer">
                            <div>
                                <p>
                                    Subtotal
                                    <span>
                                            <span class="amount">$99.00</span>
                                        </span>
                                </p>
                                <div class="ro-divide"></div>
                            </div>
                            <div class="shipping">
                                <p> Shipping </p>
                                <div class="ro-shipping-method">
                                    <p>
                                        Shipping Local Pickup (Free)
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="ro-divide"></div>
                            </div>
                            <div class="order-total">
                                <p>
                                    Total
                                    <span>
                                            <strong>
                                                <span class="amount">$99.00</span>
                                            </strong>
                                        </span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    Payment Due
                                    <span>
                                            <strong>
                                                <span class="amount">$99.00</span>
                                            </strong>
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout  content section end -->
    <!-- quick view start -->
    <div class="quick-view modal fade in" id="quick-view">
        <div class="container">
            <div class="row">
                <div id="view-gallery" class="owl-carousel product-slider owl-theme">
                    <div class="col-xs-12">
                        <div class="d-table">
                            <div class="d-tablecell">
                                <div class="modal-dialog">
                                    <div class="main-view modal-content">
                                        <div class="modal-footer" data-dismiss="modal">
                                            <span>x</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="quick-image">
                                                    <div class="single-quick-image tab-content text-center">
                                                        <div class="tab-pane  fade in active" id="sin-pro-1">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-2">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-3">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-4">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="quick-thumb">
                                                        <div class="nav nav-tabs">
                                                            <ul>
                                                                <li><a data-toggle="tab" href="#sin-pro-1"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-2"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-3"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-4"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="quick-right">
                                                    <div class="quick-right-text">
                                                        <h3><strong>product name title</strong></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <a href="#">06 Review</a>
                                                            <a href="#">Add review</a>
                                                        </div>
                                                        <div class="amount">
                                                            <h4>$65.00</h4>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                                        <div class="row m-p-b">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse responsive-strok clearfix">
                                                                    <ul>
                                                                        <li><span>Availability</span><strong>:</strong> In stock</li>
                                                                        <li><span>Condition</span><strong>:</strong> New product</li>
                                                                        <li><span>Category</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse color">
                                                                    <ul>
                                                                        <li><span>color</span><strong>:</strong> <a href="#">Red</a> <a href="#">Green</a> <a href="#">Blue</a> <a href="#">Orange</a></li>
                                                                        <li><span>size</span><strong>:</strong>  <a href="#">SL</a> <a href="#">SX</a> <a href="#">M</a> <a href="#">XL</a></li>
                                                                        <li><span>tag</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dse-btn">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="por-dse clearfix">
                                                                        <ul>
                                                                            <li class="share-btn qty clearfix"><span>quantity</span>
                                                                                <form action="#" method="POST">
                                                                                    <div class="plus-minus">
                                                                                        <a class="dec qtybutton">-</a>
                                                                                        <input type="text" value="02" name="qtybutton" class="plus-minus-box">
                                                                                        <a class="inc qtybutton">+</a>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li class="share-btn clearfix"><span>share</span>
                                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="por-dse clearfix responsive-othre">
                                                                        <ul class="other-btn">
                                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="por-dse add-to">
                                                                        <a href="#">add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product item end -->
                    <div class="col-xs-12">
                        <div class="d-table">
                            <div class="d-tablecell">
                                <div class="modal-dialog">
                                    <div class="main-view modal-content">
                                        <div class="modal-footer" data-dismiss="modal">
                                            <span>x</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="quick-image">
                                                    <div class="single-quick-image tab-content text-center">
                                                        <div class="tab-pane  fade in active" id="sin-pro-5">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-6">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-7">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-8">
                                                            <img src="/template/img/quick-view/10.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="quick-thumb">
                                                        <div class="nav nav-tabs">
                                                            <ul>
                                                                <li><a data-toggle="tab" href="#sin-pro-5"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-6"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-7"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-8"> <img src="/template/img/quick-view/10.jpg" alt="quick view" /> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="quick-right">
                                                    <div class="quick-right-text">
                                                        <h3><strong>product name title</strong></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <a href="#">06 Review</a>
                                                            <a href="#">Add review</a>
                                                        </div>
                                                        <div class="amount">
                                                            <h4>$65.00</h4>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                                                        <div class="row m-p-b">
                                                            <div class="col-sm-6">
                                                                <div class="por-dse">
                                                                    <ul>
                                                                        <li><span>Availability</span><strong>:</strong> In stock</li>
                                                                        <li><span>Condition</span><strong>:</strong> New product</li>
                                                                        <li><span>Category</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="por-dse color">
                                                                    <ul>
                                                                        <li><span>color</span><strong>:</strong> <a href="#">Red</a> <a href="#">Green</a> <a href="#">Blue</a> <a href="#">Orange</a></li>
                                                                        <li><span>size</span><strong>:</strong>  <a href="#">SL</a> <a href="#">SX</a> <a href="#">M</a> <a href="#">XL</a></li>
                                                                        <li><span>tag</span><strong>:</strong> <a href="#">Men</a> <a href="#">Fashion</a> <a href="#">Shirt</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dse-btn">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="por-dse">
                                                                        <ul>
                                                                            <li class="share-btn qty clearfix"><span>quantity</span>
                                                                                <form action="#" method="POST">
                                                                                    <div class="plus-minus">
                                                                                        <a class="dec qtybutton">-</a>
                                                                                        <input type="text" value="02" name="qtybutton" class="plus-minus-box">
                                                                                        <a class="inc qtybutton">+</a>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li class="share-btn clearfix"><span>share</span>
                                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="por-dse clearfix">
                                                                        <ul class="other-btn">
                                                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="por-dse add-to">
                                                                        <a href="#">add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product item end -->
                </div>
            </div>
        </div>
    </div>
    <!-- quick view end -->
<?php include(ROOT . '/views/layouts/footer.php');?>