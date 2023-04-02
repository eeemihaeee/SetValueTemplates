<h3> Форма регистрации</h3>
<?php
	if (!isset($_POST['regbtn']))
	{
?>

<form action ="index.php?page=4" method="post">
	<div class = "form-group">
		<label for="login">Логин:</label>
		<input type="text" class="form-control"name='login'> 
	</div>
	<div class = "form-group">
		<label for="password">Пароль:</label>
		<input type="text" class="form-control"name='password'> 
	</div>
	<div class = "form-group">
		<label for="password1">Подтвердите пароль:</label>
		<input type="text" class="form-control"name='password1'> 
	</div>
	<div class = "form-group">
		<label for="email">email:</label>
		<input type="text" class="form-control"name='email'> 
	</div>
	<button type='submit' class='btn btn-primary' name='regbtn'>
	 Зарегистрироваться
	 </button>
	 </form>
<?php
	}
	else
	{
		global $nameTrue;
		if (register($_POST['login'],$_POST['password1'],$_POST['email'])&&($nameTrue==True))
		{
			echo "<h3>
					<span style='color:green'>
						Вы успешно зарегистрировались!!!
					</span>
				   </h3>";
		}
	}
?>