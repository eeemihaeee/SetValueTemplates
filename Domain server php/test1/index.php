<?php
?>

<!DOCTYPE html>
<head>
	<meta charset = "UTF-8">
	<link rel ="stylesheet"  href="css/style_index.css">
	<link rel ="stylesheet"  href="css/bootstrap.min.css">
	<title>	Site 1</title>

</head>

<body>

  <div class = "container">
		<div class ="row">
			<header class ="col-sm-12 col-md-12 col-lg-12">
				<nav class ="col-sm-12 col-md-12 col-lg-12">
				<?php include_once('pages/menu.php');
					  include_once('pages/functions.php');
				?>
				</nav>
				
			<div class ="row">
				<?php if (isset($_GET['page']))
				{
					$page = $_GET['page'];
					if($page==1)include_once('pages/home.php');
					if($page==2)include_once('pages/upload.php');
					if($page==3)include_once('pages/gallery.php');
					if($page==4)include_once('pages/registration.php');
				}
					
				?>
			</div>
			</header>
		</div>
	
	<div class ="row">
		<!-- 25% ширина виджета -->
		<!--.col-xs- (extra small) для очень маленьких экранов 
				с шириной меньше 768px;
		.col-sm- (small) для маленьких экранов с шириной 
			больше 768px и меньше 992px;
		.col-md- (medium) для средних экранов с шириной 
			больше 992px и меньше 1200px;
		.col-lg- (large) для больших экранов с шириной 
			больше 1200px. -->
		<div class="col-sm-3 col-md-3 col-lg-3">
			<p>1</p>
			<p>2</p>
			<p>3</p>
		</div>
		<!-- 50% ширина виджета -->
		<div class="col-sm-6 col-md-6 col-lg-6">
			<p>1</p>
			<p>2</p>
			<p>3</p>
		</div>
		<!-- 25% ширина виджета -->
		<div class="col-sm-3 col-md-3 col-lg-3">
			<p>1</p>
			<p>2</p>
			<p>3</p>
		</div>
	</div>
	<div class ="row">
		<!-- 50% ширина виджета -->
		<div class="col-sm-6 col-md-6 col-lg-6">
			<p>1</p>
			<p>2</p>
			<p>3</p>
		</div>
		<!-- 50% ширина виджета -->
		<div class="col-sm-6 col-md-6 col-lg-6">
			<p>1</p>
			<p>2</p>
			<p>3</p>
		</div>
		

	</div>
	</section>
  </div>
  <script src="https://ajax.googleleapis.com/libs/jquery/1.12.4/jquerty.min.js">	</script>
  <!--jQuerty (Java) -->
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>