<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="keywords" content="Задачи список задач план расписание менеджер task manager">
		<title>TaskMaster | Регистрация</title>
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
            <div class="reg">
                <h2 class="reg__title">Добро пожаловать</h2>
                <p class="reg__subtitle">Позвольте нам помочь справиться с вашими задачами</p>

                <form action="{{ route('registration') }}" method="POST" class="reg__form" id="regForm">
                    @csrf
                    <div class="reg__inner">
                        <div class="reg__item reg__item--left">
                            <label for="regSurname" class="auth__label">Фамилия:</label>
                            <input minlength="1" maxlength="225" type="text" class="auth__input" id="regSurname" name="surname" placeholder="Введите вашу фамилию" required>
                            <div class="auth__error">Заполните поле!</div>

                            <label for="regName" class="auth__label">Имя:</label>
                            <input minlength="1" maxlength="225" type="text" class="auth__input" id="regName" name="name" placeholder="Введите ваше имя" required>
                            <div class="auth__error">Заполните поле!</div>

                            <label for="regPatronymic" class="auth__label">Отчество:</label>
                            <input minlength="1" maxlength="225" type="text" class="auth__input" id="regPatronymic" name="patronymic" placeholder="Введите ваше отчество" required>
                            <div class="auth__error">Заполните поле!</div>
                        </div>
    
                        <div class="reg__item reg__item--right">
                            <label for="regEmail" class="auth__label">Почта:</label>
                            <input minlength="1" maxlength="225" type="text" class="auth__input" id="regEmail" name="email" placeholder="Введите вашу почту" required>
                            <div class="auth__error">Поле заполнено неверно!</div>

                            <label for="regPass" class="auth__label">Пароль:</label>
                            <input minlength="8" maxlength="225" type="password" class="auth__input" id="regPass" name="password" placeholder="Введите пароль" required>
                            <div class="auth__error">Пароль не может быть меньше 8 символов!</div>

                            <label for="regConfirm" class="auth__label">Подтверждение пароля:</label>
                            <input minlength="8" maxlength="225" type="password" class="auth__input" id="regConfirm" name="confirm" placeholder="Повторите пароль" required>
                            <div class="auth__error">Пароли не совпадают!</div>
                        </div>
                    </div>

                    <input type="submit" class="btn reg__btn" value="Зарегистрироваться" data-form="#regForm">
                    <div class="reg__login">У вас уже есть аккаунт? <a href="{{ route('login') }}">Войдите в него</a></div>
                </form>
            </div>
        </div>
    </div>
	
	<!-- Script -->

	<script src="js/app.js"></script>

	</body>
</html>