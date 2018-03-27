
<?php include(ROOT . '/views/layouts/header.php');?>
<section class="header_text sub">
    <img class="pageBanner" src="/template/images/pageBanner.png" alt="Register" >
    <h4><span>Регистрация</span></h4>
</section>
<section class="main-content">
    <div class="row">
        <div class="span12" align="center">
            <?php if ($result): ?>
                <p><h3>Спасибо за регистрацию!</h3></p>
            <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <h4 class="title"><span class="text"><strong>Регистрация</strong></span></h4>
            <form action="#" method="post" class="form-stacked">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Ваше имя</label>
                        <div class="controls">
                            <input type="text" name="first_name" placeholder="Введите Ваше имя" class="input-xlarge" value="<?=$first_name; ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Фамилия</label>
                        <div class="controls">
                            <input type="text" name="last_name" placeholder="Введите Ваше имя" class="input-xlarge" value="<?=$last_name; ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email :</label>
                        <div class="controls">
                            <input type="email" name="email" placeholder="Введите Ваш email" class="input-xlarge" value="<?= $email; ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Пароль:</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Введите Ваш пароль" class="input-xlarge" value="<?= $password; ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <p></p>
                    </div>
                    <hr>
                    <input tabindex="9" name="submit" class="btn btn-inverse2" type="submit" value="Создать пользователя"/>
                </fieldset>
            </form>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php include(ROOT . '/views/layouts/footer.php');?>