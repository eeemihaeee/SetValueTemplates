<?php
$users = 'pages/users.txt';
$nameTrue = True;
function register($name, $pass,$email)
{
	//Валидация строк для 
	$name = trim(htmlspecialchars($name));
	$pass = trim(htmlspecialchars($pass));
	$email = trim(htmlspecialchars($email));
	if($name =='' ||$pass ==''||$email =='')
	{
		echo "<h3>
					<span style='color:red'>
						Не все данные введены!
					</span>
			  </h3>";
		return false;
	}
	if(strlen($name) < 3 ||strlen($pass) >30 ||strlen($email) < 3||strlen($pass) <3)
	{
		echo "<h3>
					<span style='color:red'>
						Минимальная длина элементов: 3 символа <br>
						Максимальная длина элементов: 30
					</span>
			  </h3>";
		return false;
	}
	// login проверка
	global $nameTrue;
	global $users;
	$file = fopen($users, 'a+');
	while ($line = fgets($file,128))
	{
		$readname = substr($line, 0, strpos($line,':'));
		if ($readname == $name)
		{
			echo "<h3>
					<span style='color:red'>
						Вы уже зарегистрированный пользователь!!!
					</span>
				   </h3>";
			$nameTrue=false;
		}
	}
	if ($nameTrue==True)
	{
		$line = $name.':'.md5($pass).':'.$email."\r\n";
		fputs($file, $line);
		
	}
	fclose($file);
	return true;
	
	
}

?>