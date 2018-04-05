<?php

$status = array();
$name = $_POST['name'];
$message = "Сообщение от пользователя: $name";
$result = true;
$status['error']='';
if($_POST['name']==""){
    $status['error']='Поле имя пустое';
    $result=false;
}
if($_POST['tel']==""){
    $status['error']='Поле телефон пустое';
    $result=false;
}

echo json_encode($status);
if($result){
    mail('speedwayfan@mail.ru', 'Заказ с сайта', $message);		//Отправляем на почту
}
?>
