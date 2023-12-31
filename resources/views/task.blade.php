<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="keywords" content="Задачи список задач план расписание менеджер task manager">
		<title>TaskMaster | Задачи</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	
	<body>

	<!-- Sprite -->
	
	<svg style="display:none;">
		<symbol id="plus"  viewBox="0 0 533.333 533.333">
            <g>
				<path d="M516.667,200H333.333V16.667C333.333,7.462,325.871,0,316.667,0h-100C207.462,0,200,7.462,200,16.667V200H16.667
					C7.462,200,0,207.462,0,216.667v100c0,9.204,7.462,16.666,16.667,16.666H200v183.334c0,9.204,7.462,16.666,16.667,16.666h100
					c9.204,0,16.667-7.462,16.667-16.666V333.333h183.333c9.204,0,16.667-7.462,16.667-16.666v-100
					C533.333,207.462,525.871,200,516.667,200z"/>
			</g>
        </symbol>

		<symbol id="change"  viewBox="0 0 15 15">
            <path
				fill-rule="evenodd"
				clip-rule="evenodd"
				d="M12.1464 1.14645C12.3417 0.951184 12.6583 0.951184 12.8535 1.14645L14.8535 3.14645C15.0488 3.34171 15.0488 3.65829 14.8535 3.85355L10.9109 7.79618C10.8349 7.87218 10.7471 7.93543 10.651 7.9835L6.72359 9.94721C6.53109 10.0435 6.29861 10.0057 6.14643 9.85355C5.99425 9.70137 5.95652 9.46889 6.05277 9.27639L8.01648 5.34897C8.06455 5.25283 8.1278 5.16507 8.2038 5.08907L12.1464 1.14645ZM12.5 2.20711L8.91091 5.79618L7.87266 7.87267L8.12731 8.12732L10.2038 7.08907L13.7929 3.5L12.5 2.20711ZM9.99998 2L8.99998 3H4.9C4.47171 3 4.18056 3.00039 3.95552 3.01877C3.73631 3.03668 3.62421 3.06915 3.54601 3.10899C3.35785 3.20487 3.20487 3.35785 3.10899 3.54601C3.06915 3.62421 3.03669 3.73631 3.01878 3.95552C3.00039 4.18056 3 4.47171 3 4.9V11.1C3 11.5283 3.00039 11.8194 3.01878 12.0445C3.03669 12.2637 3.06915 12.3758 3.10899 12.454C3.20487 12.6422 3.35785 12.7951 3.54601 12.891C3.62421 12.9309 3.73631 12.9633 3.95552 12.9812C4.18056 12.9996 4.47171 13 4.9 13H11.1C11.5283 13 11.8194 12.9996 12.0445 12.9812C12.2637 12.9633 12.3758 12.9309 12.454 12.891C12.6422 12.7951 12.7951 12.6422 12.891 12.454C12.9309 12.3758 12.9633 12.2637 12.9812 12.0445C12.9996 11.8194 13 11.5283 13 11.1V6.99998L14 5.99998V11.1V11.1207C14 11.5231 14 11.8553 13.9779 12.1259C13.9549 12.407 13.9057 12.6653 13.782 12.908C13.5903 13.2843 13.2843 13.5903 12.908 13.782C12.6653 13.9057 12.407 13.9549 12.1259 13.9779C11.8553 14 11.5231 14 11.1207 14H11.1H4.9H4.87934C4.47686 14 4.14468 14 3.87409 13.9779C3.59304 13.9549 3.33469 13.9057 3.09202 13.782C2.7157 13.5903 2.40973 13.2843 2.21799 12.908C2.09434 12.6653 2.04506 12.407 2.0221 12.1259C1.99999 11.8553 1.99999 11.5231 2 11.1207V11.1206V11.1V4.9V4.87935V4.87932V4.87931C1.99999 4.47685 1.99999 4.14468 2.0221 3.87409C2.04506 3.59304 2.09434 3.33469 2.21799 3.09202C2.40973 2.71569 2.7157 2.40973 3.09202 2.21799C3.33469 2.09434 3.59304 2.04506 3.87409 2.0221C4.14468 1.99999 4.47685 1.99999 4.87932 2H4.87935H4.9H9.99998Z"
			/>
        </symbol>

		<symbol id="delete"  viewBox="0 0 40 40">
            <g><path d="M28,40H11.8c-3.3,0-5.9-2.7-5.9-5.9V16c0-0.6,0.4-1,1-1s1,0.4,1,1v18.1c0,2.2,1.8,3.9,3.9,3.9H28c2.2,0,3.9-1.8,3.9-3.9V16   c0-0.6,0.4-1,1-1s1,0.4,1,1v18.1C33.9,37.3,31.2,40,28,40z"/></g><g><path d="M33.3,4.9h-7.6C25.2,2.1,22.8,0,19.9,0s-5.3,2.1-5.8,4.9H6.5c-2.3,0-4.1,1.8-4.1,4.1S4.2,13,6.5,13h26.9   c2.3,0,4.1-1.8,4.1-4.1S35.6,4.9,33.3,4.9z M19.9,2c1.8,0,3.3,1.2,3.7,2.9h-7.5C16.6,3.2,18.1,2,19.9,2z M33.3,11H6.5   c-1.1,0-2.1-0.9-2.1-2.1c0-1.1,0.9-2.1,2.1-2.1h26.9c1.1,0,2.1,0.9,2.1,2.1C35.4,10.1,34.5,11,33.3,11z"/></g><g><path d="M12.9,35.1c-0.6,0-1-0.4-1-1V17.4c0-0.6,0.4-1,1-1s1,0.4,1,1v16.7C13.9,34.6,13.4,35.1,12.9,35.1z"/></g><g><path d="M26.9,35.1c-0.6,0-1-0.4-1-1V17.4c0-0.6,0.4-1,1-1s1,0.4,1,1v16.7C27.9,34.6,27.4,35.1,26.9,35.1z"/></g><g><path d="M19.9,35.1c-0.6,0-1-0.4-1-1V17.4c0-0.6,0.4-1,1-1s1,0.4,1,1v16.7C20.9,34.6,20.4,35.1,19.9,35.1z"/></g>
        </symbol>

		<symbol id="ready"  viewBox="0 0 20 20">
            <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/>
        </symbol>

		<symbol id="edit"  viewBox="0 0 485.219 485.22">
            <g>
				<path d="M467.476,146.438l-21.445,21.455L317.35,39.23l21.445-21.457c23.689-23.692,62.104-23.692,85.795,0l42.886,42.897
					C491.133,84.349,491.133,122.748,467.476,146.438z M167.233,403.748c-5.922,5.922-5.922,15.513,0,21.436
					c5.925,5.955,15.521,5.955,21.443,0L424.59,189.335l-21.469-21.457L167.233,403.748z M60,296.54c-5.925,5.927-5.925,15.514,0,21.44
					c5.922,5.923,15.518,5.923,21.443,0L317.35,82.113L295.914,60.67L60,296.54z M338.767,103.54L102.881,339.421
					c-11.845,11.822-11.815,31.041,0,42.886c11.85,11.846,31.038,11.901,42.914-0.032l235.886-235.837L338.767,103.54z
					 M145.734,446.572c-7.253-7.262-10.749-16.465-12.05-25.948c-3.083,0.476-6.188,0.919-9.36,0.919
					c-16.202,0-31.419-6.333-42.881-17.795c-11.462-11.491-17.77-26.687-17.77-42.887c0-2.954,0.443-5.833,0.859-8.703
					c-9.803-1.335-18.864-5.629-25.972-12.737c-0.682-0.677-0.917-1.596-1.538-2.338L0,485.216l147.748-36.986
					C147.097,447.637,146.36,447.193,145.734,446.572z"/>
			</g>
        </symbol>

		
		<symbol id="close"  viewBox="0 0 24 24">
            <path class="cls-2" d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/>
        </symbol>
	</svg>
	
	<!-- Code -->
	
	<div class="page page--scroll">

		<!-- task -->

		<div class="task">
            <div class="head">
				<img src="img/could.png" alt="" class="head__bg">
                <div class="container">
                    <div class="head__inner">
						<a href="{{ route('account') }}" class="head__link">
							<div class="head__photo">
								<img src="img/ava.jpeg" alt="" class="head__img">
							</div>
							<div class="head__name">Доброе утро, <br>{{ Auth::user()->name }}</div>
						</a>
					</div>
                </div>
            </div>

			<div class="task__body">
				<div class="container">
					<div class="task__top">
						<h2 class="task__title">Задачи</h2>
						<button class="task__create" data-modal="#modalCreateTask">
							<div class="task__create-circle">
								<svg class="task__create-icon">
									<use xlink:href="#plus"></use>
								</svg>
							</div>
							добавить группу задач
						</button>
					</div>
					@foreach ($tasks as $task)
					<div class="task__item">
						<div class="task__item-head">
							<div class="task__item-title">{{ $task->task }}
								<button class="task__item-btnedit" id="{{ $task->id }}" data-modal="#modalEditT" style="display: inline">
									<svg class="task__item-edit">
										<use xlink:href="#edit"></use>
									</svg>
								</button>
							</div>
							
							<div class="task__item-icons">
								<button class="task__item-btn task__item--edit">
									<svg class="task__item-icon">
										<use xlink:href="#change"></use>
									</svg>
								</button>

								<button class="task__item-btn task__item-plus" id="{{ $task->id }}" data-modal="#modalCreatePoint">
									<svg class="task__item-icon">
										<use xlink:href="#plus"></use>
									</svg>
								</button>

								<form action="{{ route('taskDelete') }}" method="post">
									@csrf
									<input type="text" name="id" style="display: none" value="{{ $task->id }}">
									<button type="submit" class="task__item-btn task__item-btn--edit task__item-btn--delete">
										<svg class="task__item-icon">
											<use xlink:href="#delete"></use>
										</svg>
									</button>
								</form>

								<button class="task__item-btn task__item-btn--edit task__item-btn--ready">
									<svg class="task__item-icon">
										<use xlink:href="#ready"></use>
									</svg>
								</button>

							</div>
						</div>

						<div class="task__item-container">
							@foreach ($task->task_point as $task_point)
							<div class="task__item-point">
								<div class="task__item-left">
									@if ($task_point->status == 1)
										<input type="checkbox" class="task__item-checkbox" name="status" id="point{{$task_point->id}}" checked>
									@else
										<input type="checkbox" class="task__item-checkbox" name="status" id="point{{$task_point->id}}">
									@endif
									<label for="point{{$task_point->id}}" class="task__item-flag"></label>
									<label for="point{{$task_point->id}}" class="task__item-label">
										{{$task_point->task_point}}
										<button class="task__item-btnedit" id="{{ $task_point->id }}" data-modal="#modalEditTT">
											<svg class="task__item-edit">
												<use xlink:href="#edit"></use>
											</svg>
										</button>
									</label>
								</div>

								<form action="{{ route('taskPointDelete') }}" method="post">
									@csrf
									<input type="text" name="id" value="{{ $task_point->id }}" style="display: none">
									<button type="submit" class="task__item-right">
										<svg class="task__item-delete">
											<use xlink:href="#delete"></use>
										</svg>
									</button>
								</form>
							</div>
							@endforeach
						</div>
					</div>
					@endforeach
				</div>
			</div>
        </div>

		<!-- Modal -->

		<div class="modal" id="modalCreateTask">
			<div class="modal__content">
				<button class="modal__close">
					<svg class="modal__close-icon">
						<use xlink:href="#close"></use>
					</svg>
				</button>

				<h3 class="modal__title">Создание группы задач</h3>

				<form action="{{ route('taskCreate') }}" method="post" class="modal__form" id="formCreateTask">
					@csrf
					<label for="taskName" class="auth__label auth__label--modal">Название группы задач:</label>
					<div class="modal__form-inner">
						<div class="modal__left">
							<input minlength="1" type="text" class="auth__input auth__input--modal" id="taskName" name="task" placeholder="Введите название группы задач" required>
							<div class="auth__error">Заполните поле!</div>
						</div>

						<button class="modal__ready" type="submit" data-form="#formCreateTask">
							<svg class="modal__ready-icon">
								<use xlink:href="#ready"></use>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>

		<div class="modal" id="modalCreatePoint">
			<div class="modal__content">
				<button class="modal__close">
					<svg class="modal__close-icon">
						<use xlink:href="#close"></use>
					</svg>
				</button>

				<h3 class="modal__title">Создание задачи</h3>

				<form action="{{ route('taskPointCreate') }}" method="post" class="modal__form" id="formCreatePoint">
					@csrf
					<label for="taskPointName" class="auth__label auth__label--modal">Название задачи:</label>
					<div class="modal__form-inner">
						<div class="modal__left">
							<input minlength="1" type="text" class="auth__input auth__input--modal" id="taskPointName" name="task_point" placeholder="Введите название задачи" required>
							<div class="auth__error">Заполните поле!</div>
						</div>
						
						<button class="modal__ready" type="submit" data-form="#formCreatePoint">
							<svg class="modal__ready-icon">
								<use xlink:href="#ready"></use>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
		
		<div class="modal" id="modalEditT">
			<div class="modal__content">
				<button class="modal__close">
					<svg class="modal__close-icon">
						<use xlink:href="#close"></use>
					</svg>
				</button>

				<h3 class="modal__title">Изменение задачи</h3>

				<form action="{{ route('taskEdit') }}" method="post" class="modal__form" id="formEditT">
					@csrf
					<label for="taskEditT" class="auth__label auth__label--modal">Название задачи:</label>
					<div class="modal__form-inner">
						<div class="modal__left">
							<input minlength="1" type="text" class="auth__input auth__input--modal" id="taskEditT" name="task" value ="" required>
							<div class="auth__error">Заполните поле!</div>
						</div>

						<button class="modal__ready" type="submit" data-form="#formEditT">
							<svg class="modal__ready-icon">
								<use xlink:href="#ready"></use>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>

		<div class="modal" id="modalEditTT">
			<div class="modal__content">
				<button class="modal__close">
					<svg class="modal__close-icon">
						<use xlink:href="#close"></use>
					</svg>
				</button>

				<h3 class="modal__title">Изменение подзадачи</h3>

				<form action="{{ route('taskPointEdit') }}" method="post" class="modal__form" id="formEditTT">
					@csrf
					<label for="taskEditTT" class="auth__label auth__label--modal">Название подзадачи:</label>
					<div class="modal__form-inner">
						<div class="modal__left">
							<input minlength="1" type="text" class="auth__input auth__input--modal" id="taskEditTT" name="task_point" value ="" required>
							<div class="auth__error">Заполните поле!</div>
						</div>

						<button class="modal__ready" type="submit" data-form="#formEditTT">
							<svg class="modal__ready-icon">
								<use xlink:href="#ready"></use>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>

		
    </div>
	
	<!-- Script -->

	<script src="js/app.js"></script>

	</body>
</html>