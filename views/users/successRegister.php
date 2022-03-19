<?php
$title = 'Успешная регистрация';
include_once __DIR__ . "/../header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Успешная регистрация</h4>
                    <p>Ваш аккаунт <?= $user['login'] ?> успешно зарегестрирован в системе!</p>
                    <hr>
                    <p class="mb-0">Для авторизации перейдите в раздел <a href="/login">авторизации</a></p>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
<?php
include_once __DIR__ . "/../footer.php";