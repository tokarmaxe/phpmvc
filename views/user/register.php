<?php include ROOT . '/views/layouts/header.php' ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <? endif; ?>
                <div class="singup-form">
                    <h2>
                        Регистрация на сайте
                    </h2>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>"/><br/>
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br/>
                        <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"/><br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Регистрация"></input>
                    </form>
                </div>
                <?php endif;?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php' ?>
