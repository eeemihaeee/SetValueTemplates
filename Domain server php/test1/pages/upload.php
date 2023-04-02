<h3>Форма для загрузки </h3>
<?php
if(!isset($_POST['uppbtn']))
{
?>
	<form action="index.php?page=2" method="post" 
			enctype="multipart/form-data"> 
		<div class="form-group">
			<label for="myfile">Выберите файл для загрузки:</label>
			<input type="hidden" name="MAX_FILE_SIZE" 
				 />
			<input type="file" class="form-control" 
				name="myfile" accept="image/*">
			<button type="submit" class="btn btn-primary" 
				name="uppbtn">Отправить файл:</button>
	</form>
<?php
}
else
{
 if(isset($_POST['uppbtn']))
 {
 //errors handling
	if($_FILES['myfile']['error'] != 0)
	{
		echo "<h3/><span style='color:red;'>Код ошибки: " . 
			$_FILES['myfile']['error'] ."<br> Размер файла:".$_FILES['myfile']['size'].
			"<br> Тип файла:".$_FILES['myfile']['type'].
			"</span><h3/>";
		exit();
 }
 //does the file exist on server in temp folder?
 if(is_uploaded_file($_FILES['myfile']['tmp_name'])) 
 {
 //remove the file from temp folder into images 
 //folder with origin name
 move_uploaded_file($_FILES['myfile']['tmp_name'], "./images/".$_FILES['myfile']['name']);
 }
 echo "<h3/><span style='color:green;'>File 
 Файл загрузился!
</span><h3/>";
 }
}
?>

