<div class="body_admin">
	<div class="body_admin_block">
		Вход на сайт:
		<form action="/login/" method="post" enctype="multipart/form-data">
			<label for="login"><b>Логин:</b></label>
			<input type="text" placeholder="Введите логин" name="login" required><br>
			<label for="password"><b>Пароль:</b></label>
			<input type="password" placeholder="Введите пароль" name="password" required><br>
			<button type="submit">Войти на сайт!</button>
			<button type="reset" class="cancelbtn">Отменить ввод данных!</button><br>
			<span class="psw">Не помнишь <a href="/reset/?resetPassword=1" title="Сброс пароля">пароль?</a></span>
		</form>
		<details>
		<summary></summary>
			<form action="/login/?reg=1" method="post" enctype="multipart/form-data">
				<label for="nickname"><b>Логин:</b></label>
				<input type="text" placeholder="Введите логин" name="nickname" required><br>
				<label for="name"><b>Имя:</b></label>
				<input type="text" placeholder="Введите имя" name="name" required><br>
				<label for="surname"><b>Фамилия:</b></label>
				<input type="text" placeholder="Введите фамилию" name="surname" required><br>
				<label for="email"><b>Email:</b></label>
				<input type="email" placeholder="Введите email" name="email" required><br>
				<label for="password"><b>Пароль:</b></label>
				<input type="password" placeholder="Введите пароль" name="password" required><br>
				<label for="password"><b>Повтор пароля:</b></label>
				<input type="password" placeholder="Введите пароль" name="password2" required><br>
				<button type="submit">Регистрировать меня!</button>
				<button type="reset" class="cancelbtn">Отменить всё!</button>
			</form>
		</details>
	</div>
</div>