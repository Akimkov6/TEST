<html>
<head>
 <meta charset="utf-8">
<title>Проверка пароля</title>
<body bgcolor="#E1E3E2">
</head>
<body>
<center>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOOJtVbFZ30Te_xdhrqaQ1qIP5tTFljeAPD3GhF4sUJSWg2YqN">
<h1> Знаете пароль?</h1>
<h3> Чтобы прочитать сообщение для Вас неободимо ввести пароль.</h3>
<form action="check.php" method="POST">
		<p><input name="password1" type="password" placeholder= "Введите Ваш пароль"> </p>
		<div> <input type="submit" value= "Прочитать сообщение"> </div>
			</form>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['password1'])) {
	include "connect.php";
		
	$password1 = ($_POST['password1']);
	$hash2 = md5($password1);          
	$salt1 = 'sflprt49fhi2';          
	$saltedHash1 = md5($hash2 . $salt1);
			
	$result2 = $mysqli->query("SELECT Message, Password, Url FROM ".$db_table." WHERE Password='$password1'");
	
		if ($result2 == true){
			echo  "Пароль верен! Для Вас сообщение: <br> ";
			while ($obj=mysqli_fetch_object($result2)) 
			{echo base64_decode($obj->Message); 
			$message2=$obj;
			}
			}else{
			echo  "Пароль неверен! Попробуй еще раз!";
			}				
			} 
	?>
	<form action="check.php" method="POST">
		<p><input name="password2" type="password" placeholder= "Введите пароль для удаления"> </p>
		<div> <input type="submit" value= "Удалить сообщение"> </div>
			</form>
	<?php
	if (isset($_POST['password2'])) {
	include "connect.php";
		
	$password2 = ($_POST['password2']);
	$hash2 = md5($password2);          
	$salt1 = 'sflprt49fhi2';          
	$saltedHash1 = md5($hash2 . $salt1);
			
	$result3 = $mysqli->query("DELETE FROM ".$db_table." WHERE Password='$password2'");
	
		if ($result3 == true){
			echo  "Данные удалены!";
			}
			else{
			echo  "Пароль неверен! Попробуй еще раз!";
			}				
			} 
	
	?>
</center>
</body>
</html> 