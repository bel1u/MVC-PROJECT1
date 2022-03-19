<?php
$title = 'Авторизация в системе';
@include_once __DIR__ . '/../header.php';
?>

<?= ( isset($errors['error_auth'])
    ? "<div class='alert alert-danger'>Логин и пароль не верный!</div>"
    : "" )
?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6 border border-1 rounded-2 mt-2 p-2">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="inputLogin" class="form-label">Ваш логин:</label>
                        <input type="text" name="login" <?= $isError('login', true) ?> id="inputLogin" placeholder="Укажите логин" required>
                        <?= $isError('login') ?>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваш пароль:</label>
                        <input type="password" name="password" <?= $isError('password', true) ?> id="inputPassword" placeholder="Укажите пароль:" required>
                        <?= $isError('password') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Авторизацию</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>


<?php @include_once __DIR__ . '/../footer.php'; ?>