<?php
if (isset($_POST['Color']) && isset($_POST['Name'])){

    // Переменные с формы
    $Name = $_POST['Name'];
    $Color = $_POST['Color'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'dmkids'; // Имя БД
    $db_table = "wp_tailoring"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (ID,Name,Color) VALUES ('1','$Name','$Color')");
    
    if ($result == true){
    	printf("Информация занесена в базу данных");
    }else{
    	printf("Информация не занесена в базу данных");
    }
}
?>