<?php
  $name = trim(strip_tags($_POST["name"]));
  $sex = trim(strip_tags($_POST["sex"]));
  $email = trim(strip_tags($_POST["email"]));
  $country = trim(strip_tags($_POST["country"]));
  $subject = "Регистрация на сайте Бюро находок";
  $msg = "Ваши данные формы регистрации:\n" ."Имя: $name\n" ."Пол: $sex\n" ."Ваш email: $email\n" ."Страна: Россия";
  $headers = "Content-type: text/plain; charset=UTF-8" . "\r\n";
  $headers .= "From: пользователь <semen251203@yandex.ru>" . "\r\n";
  $headers .= "Bcc: semen251203@yandex.ru". "\r\n";
  if(!empty($name) && !empty($sex) && !empty($email) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    mail($email, $subject, $msg, $headers);
    echo "Спасибо! Вы успешно зарегистрировались.";
    }
?>