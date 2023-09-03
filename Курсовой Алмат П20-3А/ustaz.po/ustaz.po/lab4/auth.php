<meta charset="utf-8">
<?php
//подключение
  $db_host = "localhost";
  $db_user = "root"; // Логин БД
  $db_password = ""; // Пароль БД
  $db_base = 'lab4'; // Имя БД
  $db_table = "auth"; // Имя Таблицы БД
  $connect = mysqli_connect($db_host,$db_user,$db_password,$db_base);
  if ($connect == false) {
    echo "<h1 style=text-align:center;font-family:sans-serif;padding-top:30%;>I'm sorry, bro . . .</h1>";
    echo mysqli_connect_error();
    exit();
  }
  $log = $_POST['log'];
  $pass = $_POST['pass'];
  $sql_out = "SELECT * FROM auth WHERE `login`='$log' AND `pass`='$pass' LIMIT 1";
  $query = mysqli_query($connect, $sql_out);
  $result = mysqli_num_rows($query);
  if ($result == 1) {
     echo"         <h1 style='color: yellow'>Қош келдіңіз!!!👨🏻‍💻✨</h1>


       

           <input type='button'  class='custom-btn btn-6' onclick=\"window.location.href = 'http://localhost/lab4/%d2%b0%d1%81%d1%82%d0%b0%d0%b7%d0%b4%d0%b0%d1%80%20%d1%81%d0%b0%d0%b9%d1%82%d1%8b/menu%20web.html';\" value='Сайтқа оралу'/>";
  }
  else {
    echo "<h1 style =text-align:center;font-family:sans-serif;padding-top:36%;>Логин немесе пароль дұрыс емес</h1>";









    echo "<a href=log.html style=padding-left:48%;font-family:sans-serif;text-decoration:none;>Артқа</a>";
  }
 ?>



 <style type="">
              body {
                  background: url(O1CN01TihiX01CT8amjT05p_!!6000000000081-0-tbvideo.jpg);
                      height: 100vh;
                      background-repeat: no-repeat;
                      background-size: cover;
                      background-position:center ;
              }
              h1{
                 font-size: 50pt;
                 color: yellow;
              }
              a {
                  font-size: 21pt;

              }


          </style>











          
     <link rel="stylesheet" type="" href="58.css">









         

