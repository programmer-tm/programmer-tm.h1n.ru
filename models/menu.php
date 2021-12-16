<?php
// Делаем менюшку, отображающую пользователя:
if ($_SESSION["login"] != ""){
    // Если мы нашли пользователя, то отобразим его на морде через переменку:
    $menu = '<a title="Приветствуем тебя, пользователь: '.$_SESSION['login'].'" href="/admin/"><img src="/img/'.$_SESSION['avatar'].'" alt="'.$_SESSION['login'].'" style="border-radius: 100vh; width: 5.5vh; height: 5.5vh; margin-top: 0.5vh;"></a>';
} else {
    // Если никто не залогинен, то отобразим ссылку на вход.
    $menu = '<a href="/login/"  title="Вход на сайт">Войти</a>';
}