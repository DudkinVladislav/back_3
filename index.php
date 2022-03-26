<?php
// Отправляем браузеру правильную кодировку,
// файл index.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8');

// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
  if (!empty($_GET['save'])) {
    // Если есть параметр save, то выводим сообщение пользователю.
    print('Спасибо, результаты сохранены.');
exit();
  }
  // Включаем содержимое файла form.php.
  include('form.php');
  // Завершаем работу скрипта.
  exit();
}
// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.

// Проверяем ошибки.
$errors = FALSE;
if (empty($_POST['fio'])) {
  print('Заполните имя.<br/>');
  $errors = TRUE;
}
if (empty($_POST['email'])) {
  print('Заполните email.<br/>');
  $errors = TRUE;
}
if (empty($_POST['date'])) {
  print('Заполните дату.<br/>');
  $errors = TRUE;
}
if (empty($_POST['biography'])) {
  print('Расскажите о себе.<br/>');
  $errors = TRUE;
}
// *************
// Тут необходимо проверить правильность заполнения всех остальных полей.
// *************

if ($errors) {
  // При наличии ошибок завершаем работу скрипта.
  exit();
}

$fio=$_POST['fio'];
$email=$_POST['email'];
$date=$_POST['date'];
$bio=$_POST['biography'];
$pol=$_POST['pol'];
$parts=$_POST['parts'];
$powers= implode(",",$_POST['abilities']);
// Сохранение в базу данных.

$user = 'u46613';
$pass = '1591065';
$db = new PDO('mysql:host=localhost; dbname=u46613', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

// Подготовленный запрос. Не именованные метки.
try {
  $stmt = $db->prepare("INSERT INTO application SET name = ?, email = ?, date=?, pol= ?, parts= ?, abilities= ?, bio= ?");
  $stmt -> execute([$_POST['fio'], $_POST['email'], $_POST['date'], $_POST['pol'], $_POST['parts'], $powers, $_POST['biography']]);
}
catch(PDOException $e){
  print('Error : ' . $e->getMessage());
  exit();
}


//  stmt - это "дескриптор состояния".

// Делаем перенаправление.
// Если запись не сохраняется, но ошибок не видно, то можно закомментировать эту строку чтобы увидеть ошибку.
// Если ошибок при этом не видно, то необходимо настроить параметр display_errors для PHP.
header('Location: ?save=1');
