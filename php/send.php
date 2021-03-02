<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    
    $name = urldecode($name);
    $phone = urldecode($phone);
    
    $name = trim($name);
    $phone = trim($phone);
    
    $emailTo ="kirill.pr9n1k@yandex.ru";//куда
    
    $emailFrom ="email@internationfamily.ru/"; //ссылка сайта


    $emailSubject = "Заявка на покупку"; // о чем письмо
    
    $message = "Имя: $name<br>
    Телефон: $phone";
    
    if(mail($emailTo, $emailSubject, $message, $headers))
    {echo ('Письмо успешно отправлено!');}
    else{
        echo ('Есть ошибки!проверьте данные...');
    }

?>