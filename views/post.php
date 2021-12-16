<div class="body">
	<!-- Тут выводим запись -->
	<div class="body_block">
		<!-- Прверим наличие названия записи -->
		<!--Картинка записи-->
        <img src="/img/<?php echo ($post['image']) ?: 'null.jpeg';?>" style="border-radius: 100vh; width: 13vh; height: 13vh; margin-top: 0.5vh;">
		<!-- Название записи -->
		<?=$post['title'];?><br><br>
		<!-- Текст записи -->
		<?php echo str_replace(array("\r\n", "\r", "\n"), '<br>', $post['text']);?><br><br>
		*****<br>
		Комментарии:
		<?php if ($commentCount == 0):?>
			нет комментариев!
		<?php else:?>
			<!-- Тут блок обхода комментариев, если они есть -->
			<?php foreach($comments as $comment):?>
				<!-- Автор коммента -->
				<br>Имя: <?=$comment['name'];?><br>
				<!-- Текст коммента -->
				Комментарий: <?=$comment['text'];?><br>
			<?php endforeach;?>
		<?php endif;?>
		<!-- Форма отправки коммента, в зависимости от авторизации -->
		<br>Оставить комментарий:<br>
		<?php if ($_SESSION['login']):?>
			<form action="/post/?id=<?=$post['id'];?>" method="post" enctype="multipart/form-data">
                <label for="text"><b>Комментарий:</b></label>
                <textarea placeholder="Комментарий" name="text" required></textarea><br>
                <button type="submit">Отправить комментарий!</button>
                <button type="reset" class="cancelbtn">Отменить</button>
			</form>
		<?php else:?>
			<form action="/post/?id=<?=$post['id'];?>" method="post" enctype="multipart/form-data">
				<label for="name"><b>Ваше имя:</b></label>
				<input type="text" placeholder="Имя" name="name" required><br>
				<label for="email"><b>Email:</b></label>
				<input type="email" placeholder="Email" name="email" required><br>
				<label for="text"><b>Комментарий:</b></label>
				<textarea placeholder="Комментарий" name="text" required></textarea><br>
				<button type="submit">Отправить комментарий!</button>
				<button type="reset" class="cancelbtn">Отменить</button>
			</form>
		<?php endif;?>
	</div>
</div>