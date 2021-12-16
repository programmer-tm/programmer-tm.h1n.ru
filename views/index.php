<div class="body">
    <!--Разложим данные массива на отдельные блоки:-->
    <?php foreach($posts as $post):?>
        <div class="body_block">
            <!--Картинка записи-->
            <img src="/img/<?php echo ($post['image']) ?: 'null.jpeg';?>" style="border-radius: 100vh; width: 13vh; height: 13vh; margin-top: 0.5vh;">
            <!-- Название записи -->
            <?=$post['title'];?><br><br>
            <!-- Первые 4 строки записи -->
            <?php $text = explode("\r\n", $post['text']); echo $text[0]."<br>".$text[1]."<br>".$text[2]."<br>".$text[3];?><br>
            <!-- Ссылка на полное чтение и комментирование -->
            <a href="post/?id=<?=$post['id']?>"  title="Просмотр всего произведения">Читать далее...(<?=$post['reading'];?>)<br><br></a>
        </div>
    <?php endforeach;?>
</div>