<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="keywords" content="Задачи список задач план расписание менеджер task manager">
		<title>TaskMaster | Вход</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	
	<body>
	<div class="page">
		<img src="img/could.png" alt="" class="page__bg">

        <div class="container">
            <div class="login">
                <h2 class="login__title">С возвращением</h2>
                
                <div class="login__inner">
                    <div class="login__item login__item--left">
                        <img src="img/login.svg" alt="" class="login__img">
                    </div>

                    <form action="{{ route('loginPost') }}" method="post" class="login__item login__item--right" id="logForm">
                        @csrf
                        <label for="loginEmail" class="auth__label">Почта:</label>
                        <input type="text" class="auth__input" id="loginEmail" name="email" placeholder="Введите вашу почту">
                        <div class="auth__error">Поле заполнено неверно!</div>
                        @error('auth')
                            <div class="auth__error auth__exit" style="display: block">Неправильный логин или пароль!</div>
                        @enderror
                        <label for="loginPass" class="auth__label">Пароль:</label>
                        <input type="password" class="auth__input" id="loginPass" name="password" placeholder="Введите пароль">
                        <div class="auth__error">Пароль не может быть меньше 8 символов!</div>
                        <input type="submit" class="btn login__btn" value="Войти" data-form="#logForm">
                        <div class="login__reg">Нет аккаунта? <a href="{{ route('registration') }}">Зарегистрируйтесь</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Script -->

	<script src="js/app.js"></script>

	</body>
</html>