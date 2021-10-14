<?php



    $email = $_POST['email'];
    $text = $_POST['text'];



    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);

    $email = urldecode($email);
    $text = urldecode($text);

    $email = trim($email);
    $text = trim($text);



    if(mail("aderbdinc.2021@gmail.com",
            "Новый заказ",
            "Email".$email."\n".
            "text".$text."\n".
            "Form: no-reply@mydomain.ru \r\n")
    ) {
      echo ("Заказ успешно был принят, нажмите на кнопку");
    }

    else {
      echo("Проверьте данные... В них есть ошибка");
    }




?>
