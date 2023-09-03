<meta charset="utf-8">
<style media="screen">
  * {
    margin: 0;
    padding: 0;
  }
</style>
<?php
//Генерация пароля
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>
<?php
//Запись в БД
  $login = $_POST['login'];
  $pass = randomPassword();
//подключение
  $db_host = "localhost";
  $db_user = "root"; // Логин БД
  $db_password = ""; // Пароль БД
  $db_base = 'lab4'; // Имя БД
  $db_table = "auth"; // Имя Таблицы БД
  $connect = mysqli_connect($db_host,$db_user,$db_password,$db_base);
 ?>
<?php
//Проверка на наличие похожего логина
  $sql_out = "SELECT * FROM auth WHERE `login` = '$login'";
  $query_second = mysqli_query($connect,$sql_out);
  $result = mysqli_num_rows($query_second);
  if ($result == 1) {
       echo "<p align='left'> <font color=yellow  size='6pt'>Логин немесе құпиясөз дұрыс емес 🔐❌</font> </p>";
  }
  else {
    //Ввод данных
      $sql_in = "INSERT INTO auth (`login`, `pass`) VALUES ('$login','$pass')";
    //выполнение запроса
      $query = mysqli_query($connect, $sql_in);
    //
      //Вывод
       print "<p align='left'> <font color=YELLOW  size='7pt'>Сіз тіркелдіңіз🔐✔️</font> </p>

<br>


<p align='left'> <font color=white  size='7pt'>Логиніңіз:</font> </p>

       <strong style=color:#f0f;font-size:30pt;>$login</strong></p>

       <h1>ㅤ</h1>


<p align='left'> <font color=white  size='7pt'>Сізге ұсынылатын құпиясөз:</font> </p>

       
       <p style=font-size:25pt;padding-left:5px;> <strong style=color:#f00;>".$pass."</strong></p>";
      //
  }
 ?>



<style type="text/css">
              body {
                  background: url(O1CN01TihiX01CT8amjT05p_!!6000000000081-0-tbvideo.jpg);
                      height: 100vh;
                      background-repeat: no-repeat;
                      background-size: cover;
                      background-position:center ;
              }
              h1{
                 font-size: 50pt;
              }
              a {
                  font-size: 21pt;

              }


          </style>





