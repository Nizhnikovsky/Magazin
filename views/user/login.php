<?php include(ROOT . '/views/layouts/header.php');?>
<!-- pages-title-start -->
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Вход</h2>
                    <p><a href="/">Домой</a> | Вход</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- login content section start -->
<div class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="tb-login-form ">
                    <h5 class="tb-title">Вход</h5>
                    <p>Добро пожаловать,зарегестрируйтесь или войдите в Ваш аккаунт</p>
                    <div class="tb-social-login">
                        <a class="tb-facebook-login" href="#">
                            <i class="fa fa-facebook"></i>
                            Sign In With Facebook
                        </a>
                        <a class="tb-twitter-login res" href="#">
                            <i class="fa fa-twitter"></i>
                            Sign In With Twitter
                        </a>
                    </div>
                    <form action="#" method="post">
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Логин (email)
                                <em>*</em>
                            </label>
                            <input type="email" name="email" placeholder="Введите Ваш e-mail" class="input-xlarge" value="<?=$email; ?>"/>
                        </p>
                        <p class="checkout-coupon top-down log a-an">
                            <label class="l-contact">
                                Пароль
                                <em>*</em>
                            </label>
                            <input type="password" name="password" placeholder="Введите Ваш пароль" class="input-xlarge" value="<?=$password; ?>"/>
                        </p>
                        <div class="forgot-password1">
                            <label class="inline2">
                                <input type="checkbox" name="rememberme7">
                                Запомнить меня! <em>*</em>
                            </label>
                            <a class="forgot-password" href="#">Забыли Ваш пароль?</a>
                        </div>
                        <p class="login-submit5">
                            <input  name="submit" class="button-primary" type="submit" value="Войти">
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="tb-login-form res">
                    <h5 class="tb-title">Создать новый кабинет</h5>
                    <p>Если Вы не зарегестрированы, введите Ваш электронный адресс</p>
                    <form action="#" method="post">
                        <p class="checkout-coupon top log a-an">
                            <label class="l-contact">
                                Email Address
                                <em>*</em>
                            </label>
                            <input type="email">
                        </p>
                        <p class="login-submit5 res">
                            <input  name="submit" value="Зарегестрироваться" class="button-primary" type="submit">
                        </p>
                    </form>
                    <div class="tb-info-login ">
                        <h5 class="tb-title4">Зарегестрируйтесь сегодня и Вы сможете:</h5>
                        <ul>
                            <li>Получить скидку до 20%</li>
                            <li>Получить бесплатную доставку.</li>
                            <li>Довольствоваться большим выбором товаров.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login  content section end -->
<?php include(ROOT . '/views/layouts/footer.php');?>


           
            
            
                    
                    
