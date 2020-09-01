<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Задачник</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		
	   
			
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
		
    </head>
    <body>

       

		
			<!-- HEADER-MIDDLE START -->
			<div class="header-middle">
				<div class="container">
					<!-- Start Support-Client -->
					<div class="support-client hidden-xs">
						<div class="row">
							
						</div>
					</div>
					<!-- End Support-Client -->
					
				</div> 
			</div>
			<!-- HEADER-MIDDLE END -->
			<!-- START MAINMENU-AREA -->
			<div class="mainmenu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mainmenu hidden-sm hidden-xs">
								<nav>
									<ul>
										<li><a href="index.php">Задачи</a>
											<ul>
												
											</ul>
										</li>
										<li><a href="suc.php">Выполненые задачи</a></li>
									
										
										
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN-MENU-AREA -->
			
		</header>
		<!-- HEADER AREA END -->
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.php">Главная</a></li>
							<li class="active"><a href="#">Профиль</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						
		</section>
		<!-- END PAGE-CONTENT -->
			<?php
 

      if(!isset($_SESSION['login_user'])) 
       {
echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
       }
?>
    <body class="home blog">

        
<?php
include ("bd.php");
$user = $_SESSION['login_user'];

$result = mysql_query("SELECT * FROM users WHERE login='$user'");
while ($row = mysql_fetch_array($result)) {
echo " <div class='pagination-area'>
				<div class='row'>
					<div class='col-xs-5'>
				<div class='pagination'>

       <img height='200px' weight='200px' src='../img/profiles/blank.jpg' class='imgp'><br>
        <label>Никнейм:&nbsp {$row['login']}</label><br>
        
        
<br>

<li><a href='../php/logout.php' target='_top'  class='buttonL' align='left' >Выйти из аккаунта</a> 															
<li><a href='forms.php'>Выбрать выполненые задания</a></li>															
<li><a href='formd.php'>Редактировать задания</a></li>"
 ;}
?>

   
    </body>
		
			
			
		
        

		
    </body>
</html>



