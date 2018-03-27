<?php include(ROOT . '/views/layouts/header.php');?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Корзина</h2>
                    <p><a href="/">На главную</a> | Корзина</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- shopping-cart content section start -->
<div class="shopping-cart-area s-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="s-cart-all">
                    <div class="cart-form table-responsive">
                        <table id="shopping-cart-table" class="data-table cart-table">
                            <tr>
                                <th class="low10">Удалить</th>
                                <th class="low1">Товар</th>
                                <th class="low7">Количество</th>
                                <th class="low7">Цена</th>
                                <th class="low7">Общая сумма</th>
                            </tr>
                            <tr>
                                <td class="sop-cart an-shop-cart">
                                    <a class="remove" href="#">
                                        <span>x</span>
                                    </a>
                                </td>
                                <td class="sop-cart an-shop-cart">
                                    <a href="#"><img class="primary-image" alt="" src="/template/img/products/10.jpg"></a>
                                    <a href="#">Vintage Lambskin</a>
                                </td>
                                <td class="sop-cart an-sh">
                                    <div class="quantity ray">
                                        <input class="input-text qty text" type="number" size="4" title="Qty" value="2" min="0" step="1">
                                    </div>
                                </td>
                                <td class="sop-cart">
                                    <div class="tb-product-price font-noraure-3">
                                        <span class="amount">$180.00</span>
                                    </div>
                                </td>
                                <td class="cen">
                                    <span class="amount">$180.00</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="last-check1">
                        <div class="yith-wcwl-share yit">
                            <p class="checkout-coupon an-cop">
                                <input type="submit" value="Удалить все товары">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="second-all-class">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="tb-tab-container2">
                        <ul class="etabs" role="tablist">
                            <li class="vc_tta-tab " role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Использовать скидочный купон</a></li>
                        </ul>
                        <div class="tab-content another-cen">
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="2nd-copun-code">
                                    <form action="#">
                                        <p class="form-row form-row-wide">
                                            <label>
                                                Код:
                                                <span class="required">*</span>
                                            </label>
                                            <input class="form-control again" type="text" name="name" required="" placeholder="Код">
                                        </p>
                                        <p class="checkout-coupon full">
                                            <input type="submit" value="Отправить">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="sub-total">
                        <table>
                            <tbody>
                            <tr class="order-total">
                                <th>Общаяя сумма:</th>
                                <td>
                                    <strong>
                                        <span class="amount">$297.00</span>
                                    </strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="wc-proceed-to-checkout">
                        <p class="return-to-shop">
                            <a class="button wc-backward" href="/">Продолжить покупки</a>
                        </p>
                        <a class="wc-forward" href="/cart/checkout/">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shopping-cart  content section end -->
<?php include(ROOT . '/views/layouts/footer.php');?>

