<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="keywords" content="Задачи список задач план расписание менеджер task manager">
		<title>TaskMaster | Личный кабинет</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	
	<body>

	<!-- Sprite -->
	
	<svg style="display:none;">
		<symbol id="change"  viewBox="0 0 15 15">
            <path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M12.1464 1.14645C12.3417 0.951184 12.6583 0.951184 12.8535 1.14645L14.8535 3.14645C15.0488 3.34171 15.0488 3.65829 14.8535 3.85355L10.9109 7.79618C10.8349 7.87218 10.7471 7.93543 10.651 7.9835L6.72359 9.94721C6.53109 10.0435 6.29861 10.0057 6.14643 9.85355C5.99425 9.70137 5.95652 9.46889 6.05277 9.27639L8.01648 5.34897C8.06455 5.25283 8.1278 5.16507 8.2038 5.08907L12.1464 1.14645ZM12.5 2.20711L8.91091 5.79618L7.87266 7.87267L8.12731 8.12732L10.2038 7.08907L13.7929 3.5L12.5 2.20711ZM9.99998 2L8.99998 3H4.9C4.47171 3 4.18056 3.00039 3.95552 3.01877C3.73631 3.03668 3.62421 3.06915 3.54601 3.10899C3.35785 3.20487 3.20487 3.35785 3.10899 3.54601C3.06915 3.62421 3.03669 3.73631 3.01878 3.95552C3.00039 4.18056 3 4.47171 3 4.9V11.1C3 11.5283 3.00039 11.8194 3.01878 12.0445C3.03669 12.2637 3.06915 12.3758 3.10899 12.454C3.20487 12.6422 3.35785 12.7951 3.54601 12.891C3.62421 12.9309 3.73631 12.9633 3.95552 12.9812C4.18056 12.9996 4.47171 13 4.9 13H11.1C11.5283 13 11.8194 12.9996 12.0445 12.9812C12.2637 12.9633 12.3758 12.9309 12.454 12.891C12.6422 12.7951 12.7951 12.6422 12.891 12.454C12.9309 12.3758 12.9633 12.2637 12.9812 12.0445C12.9996 11.8194 13 11.5283 13 11.1V6.99998L14 5.99998V11.1V11.1207C14 11.5231 14 11.8553 13.9779 12.1259C13.9549 12.407 13.9057 12.6653 13.782 12.908C13.5903 13.2843 13.2843 13.5903 12.908 13.782C12.6653 13.9057 12.407 13.9549 12.1259 13.9779C11.8553 14 11.5231 14 11.1207 14H11.1H4.9H4.87934C4.47686 14 4.14468 14 3.87409 13.9779C3.59304 13.9549 3.33469 13.9057 3.09202 13.782C2.7157 13.5903 2.40973 13.2843 2.21799 12.908C2.09434 12.6653 2.04506 12.407 2.0221 12.1259C1.99999 11.8553 1.99999 11.5231 2 11.1207V11.1206V11.1V4.9V4.87935V4.87932V4.87931C1.99999 4.47685 1.99999 4.14468 2.0221 3.87409C2.04506 3.59304 2.09434 3.33469 2.21799 3.09202C2.40973 2.71569 2.7157 2.40973 3.09202 2.21799C3.33469 2.09434 3.59304 2.04506 3.87409 2.0221C4.14468 1.99999 4.47685 1.99999 4.87932 2H4.87935H4.9H9.99998Z"
			/>
        </symbol>

        <symbol id="ready"  viewBox="0 0 20 20">
            <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
        </symbol>
	</svg>
	
	<!-- Code -->
	
	<div class="page page--scroll">

		<!-- Account -->

		<div class="account">
            <div class="head">
				<img src="img/could.png" alt="" class="head__bg">
                <div class="container">
                    <div class="head__inner">
                        <div class="head__photo">
                            <img src="img/ava.jpeg" alt="" class="head__img">
                        </div>
					</div>
                </div>
            </div>

            <div class="container">
                <div class="account__head">
                    <h2 class="account__head-title">Личный кабинет</h2>

                    <div class="account__head-btns">
                        <a href="{{ route('task') }}" class="account__head-btn">Задачи</a>
                        <a href="{{ route("logout") }}" class="account__head-btn">Выйти</a>
                    </div>
                </div>

                <form action="{{ route('userEdit') }}" method="post" class="account__body" id="accountForm">
                    @csrf
                    <div class="account__block account__block--left">
                        <h4 class="account__title">Общие данные</h4>

                        <div class="account__item">
                            <div class="account__info">
                                <div class="account__text">Фамилия: <span>{{ Auth::user()->surname }}</span></div>

                                <button class="account__btn account__btn--change">
                                    <svg class="account__icon">
                                        <use xlink:href="#change"></use>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="account__form">
                                <input type="text" class="auth__input auth__input--account" id="accountSurname" name="surname" value="{{ Auth::user()->surname }}">
                                <button class="account__btn account__btn--ready" data-form="#accountForm">
                                    <svg class="account__icon">
                                        <use xlink:href="#ready"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="account__item">
                            <div class="account__info">
                                <div class="account__text">Имя: <span>{{ Auth::user()->name }}</span></div>

                                <button class="account__btn account__btn--change">
                                    <svg class="account__icon">
                                        <use xlink:href="#change"></use>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="account__form">
                                <input type="text" class="auth__input auth__input--account" id="accountName" name="name" value="{{ Auth::user()->name }}">
                            
                                <button type="submit" class="account__btn account__btn--ready" data-form="#accountForm">
                                    <svg class="account__icon">
                                        <use xlink:href="#ready"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="account__item">
                            <div class="account__info">
                                <div class="account__text">Отчество: <span>{{ Auth::user()->patronymic }}</span></div>

                                <button class="account__btn account__btn--change">
                                    <svg class="account__icon">
                                        <use xlink:href="#change"></use>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="account__form">
                                <input type="text" class="auth__input auth__input--account" id="accountPatronymic" name="patronymic" value="{{ Auth::user()->patronymic }}">
                            
                                <button class="account__btn account__btn--ready" data-form="#accountForm">
                                    <svg class="account__icon">
                                        <use xlink:href="#ready"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="account__block account__block--right">
                        <h4 class="account__title">Безопасность</h4>

                        <div class="account__item">
                            <div class="account__info">
                                <div class="account__text">E-mail: <span>{{ Auth::user()->email }}</span></div>

                                <button class="account__btn account__btn--change">
                                    <svg class="account__icon">
                                        <use xlink:href="#change"></use>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="account__form">
                                <input type="text" class="auth__input auth__input--account" id="accountEmail" name="email" value="{{ Auth::user()->email }}">
                            
                                <button class="account__btn account__btn--ready" data-form="#accountForm">
                                    <svg class="account__icon">
                                        <use xlink:href="#ready"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
	<!-- Script -->

	<script src="js/app.js"></script>

	</body>
</html>