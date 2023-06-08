<!DOCTYPE html>
<html>
<head>
    <title>Форма</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/app.css">
</head>
<body>
<div>
    <p id="errorMessage" style="display: none; color: red;"></p>
    <div class="form-container">
        <p id="successMessage" style="display: none; color: green; font-weight: bold; "></p>
        <form method="post" id="form">
            <div class="form-group">
                <label for="firstname">Ім'я:</label>
                <input type="text" class="form-control" id="firstname" placeholder="Введіть ім'я">
            </div>
            <div class="form-group">
                <label for="lastname">Прізвище:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Введіть прізвище">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Введіть email">
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" id="password" placeholder="Введіть пароль">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Повторіть пароль:</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Повторіть пароль">
            </div>
            <button type="submit" class="btn btn-primary" id="submitButton">Відправити</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>
