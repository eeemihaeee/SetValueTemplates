<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6 left">
<!-- section A: for form Countries -->
<?php
$bdserv = connect();

$sel='select * from countries';
$res=mysqli_query($bdserv ,$sel);
echo '<form action="index.php?page=5" 
 method="post" 
 class="input-group" id="formcountry">';
echo '<table class="table table-striped">';
while($row = mysqli_fetch_array($res, MYSQLI_NUM)){
echo '<tr>';
echo '<td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td><input type="checkbox" 
 name="cb'.$row[0].'"></td>';
echo '</tr>';
}
echo '</table>';
mysqli_free_result($res);
echo '<input type="text" name="country" 
 placeholder="Country">';
echo '<input type="submit" name="addcountry" 
 value="Add" 
class="btn btn-sm btn-info">';
echo '<input type="submit" name="delcountry" 
 value="Delete" 
class="btn btn-sm btn-warning">';
echo '</form>';



//ДОБАВЛЕНИЕ
if (isset($_POST['addcountry'])){
$country=trim(htmlspecialchars($_POST['country']));
if($country=="") exit();
$ins='insert into countries(country) values("'.$country.'")';
mysqli_query($bdserv,$ins);
echo "<script>";
echo "window.location=document.URL;";
echo "</script>";
}
if(isset($_POST['delcountry'])){
 foreach($_POST as $k => $v) {
if (substr($k,0,2)=="cb"){
$idc=substr($k,2);
$del='delete from countries where id='.$idc;
mysqli_query($del);
 }
}
echo "<script>";
 echo "window.location=document.URL;";
echo "</script>";
}
?>
</div>
<div class="col-sm-6 col-md-6 col-lg-6 right">
<!-- section B: for form Cities -->
<?php
echo '<form action="index.php?page=5" 
 method="post" class="input-group" id="formcity">';
$sel='SELECT ci.id, ci.city, co.country 
from countries co, cities ci
WHERE ci.countryid=co.id';
$res=mysqli_query($bdserv,$sel);
echo '<table class="table table-striped">';
while ($row=mysqli_fetch_array($res,MYSQLI_NUM)) 
	{
		echo '<tr>';
		echo '<td>'.$row[0].'</td>';
		echo '<td>'.$row[1].'</td>';
		echo '<td>'.$row[2].'</td>';
		echo '<td><input type="checkbox" 
			name="ci'.$row[0].'"></td>';
		echo '</tr>';
	}
	echo '</table>';
	mysqli_free_result($res);
	$res=mysqli_query($bdserv,'select * from countries');
	echo '<select name="countryname" class="form-control">';
	while ($row=mysqli_fetch_array($res,MYSQLI_NUM))
	{
		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	}
	echo '</select>';
	echo '<input type="text" name="city" 
										placeholder="City">';
	echo '<input type="submit" name="addcity" value="Add" 
										class="btn btn-sm btn-info">';
	echo '<input type="submit" name="delcity" value="Delete"
				class="btn btn-sm btn-warning">';
	echo '</form>';
	
	if(isset($_POST['addcity'])){
$city=trim(htmlspecialchars($_POST['city']));
if ($city=="") exit();
$countryid=$_POST['countryname'];
$ins='insert into cities (city,countryid) values
 ("'.$city.'",'.$countryid.')';
mysqli_query($bdserv,$ins);
$err=mysqli_errno();
if ($err){
echo 'Error code:'.$err.'<br>';
exit();
 }
echo "<script>";
echo "window.location=document.URL;";
echo "</script>";
}
if(isset($_POST['delcity'])){
foreach ($_POST as $k => $v) {
if (substr($k,0,2)=="ci"){
 $idc=substr($k,2);
 $del='delete from cities where 
 id='.$idc;
mysqli_query($bdserv,$del);
 }
 }
echo "<script>";
echo "window.location=document.URL;";
echo "</script>";
 }
?>
</div>
</div>
<hr/>
<div class="row">
<div class=" col-sm-6 col-md-6 col-lg-6 left ">
<!-- section C: for form Hotels -->
</div>
<div class=" col-sm-6 col-md-6 col-lg-6 right ">
<!-- section D: for form Images -->
</div>
</div>
