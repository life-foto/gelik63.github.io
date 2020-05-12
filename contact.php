<?php
if (isset ($_POST['contactFF'])) {
  $to = "life-foto@yandex.ru";
  $subject = "Заполнена контактная форма на сайте ".$_SERVER['HTTP_REFERER'];
  $message = "Имя пользователя: ".$_POST['nameFF']."\nТелефон пользователя ".$_POST['telFF']."\n\nАдрес сайта: ".$_SERVER['HTTP_REFERER'];
}
?>