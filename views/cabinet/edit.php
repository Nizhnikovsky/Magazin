<?php include(ROOT . '/views/layouts/header.php');?>
<section class="header_text sub">
    <img class="pageBanner" src="/template/images/pageBanner.png" alt="Register" >
</section>
<section class="main-content">
    <div class="row">
        <div class="span12">
            <?php  if($result):?>
            <p>Данные отредактированы</p>
            <?php else:?>
            <?php if(isset($errors) && is_array($errors)):?>
                <ul>
                    <?php foreach ($errors as $error):?>
                        <li>- <?=$error;?></li>
                    <?php endforeach;?>
                </ul>
            <?php endif;?>
            <?php endif;?>
            <h4 class="title" align="center"><span class="text"><strong>Редактирование</strong></span></h4>
            <form action="#" method="post">
                <fieldset>
                    <div class="control-group" align="center">
                        <label class="control-label" >Имя пользователя</label>
                        <div class="controls">
                            <input type="text" name="name" placeholder="Имя" class="input-xlarge" value="<?=$first_name; ?>"/>
                        </div>
                    </div>
                    <div class="control-group" align="center">
                        <label class="control-label" >Фамилия</label>
                        <div class="controls">
                            <input type="text" name="name" placeholder="Имя" class="input-xlarge" value="<?=$last_name; ?>"/>
                        </div>
                    </div>
                    <div class="control-group" align="center">
                        <label class="control-label" >Телефон</label>
                        <div class="controls">
                            <input type="text" name="phone" placeholder="Имя" class="input-xlarge" value="<?=$phone; ?>"/>
                        </div>
                    </div>
                    <div class="control-group" align="center">
                        <label class="control-label">Пароль</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Введите Ваш пароль" id="password" class="input-xlarge" value="<?=$password?>">
                        </div>
                    </div>
                    <div class="control-group" align="center">
                        <input tabindex="3" class="btn btn-inverse2 large" type="submit" name="submit" value="Отправить">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
<?php include(ROOT . '/views/layouts/footer.php');?>

