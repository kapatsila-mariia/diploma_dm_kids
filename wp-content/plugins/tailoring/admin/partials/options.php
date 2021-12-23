<?
 /* Замініть нижченаведені змінні на свої */
   $host = "localhost";      // MYSQL server
   $user_db = "root";        // MYSQL користувач
   $pass_db = "";            // MYSQL пароль
   $dbase = "dmkids";          // MYSQL база даних
   $dtable = "dm_tailoring";        // Таблиця в базі даних        
  
   /* З'єднання з сервером бази даних */
   mysql_connect ("$host", "$user_db", "$pass_db");
   /* Вибір бази даних */
   mysql_select_db("$dbase");
   /* Увага!!! Якщо Ви працюєте під Windows,
   то зніміть коментар з наступних рядків */
   $Color = $HTTP_GET_VARS["Color"];

      // Основні дії скрипта
   // Створення SQL запиту
   $sql = "INSERT INTO $dtable (id,Color) ";
   $sql .= "VALUES ('','$Color')";
   /* Виконання SQL запиту */
   $result = mysql_query($sql);
    // Перевірка виконання операції
   if(!$result){    echo "<H2>Помилка!</H2>n";
    echo mysql_errno().":  ".mysql_error()."<P>";
    } else {   
    print "<META HTTP-EQUIV="Refresh" CONTENT="2; URL=forma.html">";
    echo "Запис <b>$Color</b> створена!";
    //echo phpinfo();
    }