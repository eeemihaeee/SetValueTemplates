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
					if($page==1)include_once('index.php');
					if($page==2)include_once('pages/upload.php');
					if($page==3)include_once('pages/gallery.php');
					if($page==4)include_once('pages/registration.php');
					if($page==5)include_once('pages/admin.php');
				}
					
				?>
			</div>
			</header>
		</div>
	
	

	</div>
	</section>
  </div>
  <script src="https://ajax.googleleapis.com/libs/jquery/1.12.4/jquerty.min.js">	</script>
  <!--jQuerty (Java) -->
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>