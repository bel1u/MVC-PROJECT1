<?php
    $title = 'Регистрация в системе';
    @include_once 'header.php';
?>

<?= ( isset($_GET['error_password'])
    ? "<div class='alert alert-danger'>Пароли не совпали!</div>"
    : "" )
?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6 border border-1 rounded-2 mt-2 p-2">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Ваше ФИО:</label>
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Фамилия Имя Отчество" required>
                </div>
                <div class="mb-3">
                    <label for="inputLogin" class="form-label">Ваш логин:</label>
                    <input type="text" name="login" class="form-control" id="inputLogin" placeholder="Укажите логин" required>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Ваш пароль:</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Укажите пароль:" required>
                </div>
                <div class="mb-3">
                    <label for="inputPasswordConfirmed" class="form-label">Ваш повтор пароля:</label>
                    <input type="password" name="password_confirmed" class="form-control" id="inputPasswordConfirmed" placeholder="Укажите пароль повторно:" required>
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>


<?php @include_once 'footer.php'; ?>