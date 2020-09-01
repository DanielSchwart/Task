<?php
session_start(); 
?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ЗАДАЧНИК</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	
		  <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
	


			<!-- HEADER START -->
		<header class="header-area">
			<!-- HEADER-TOP START -->
			<div class="header-top hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="top-menu">
								
								<ul class="Login">
									<li><a href="profile_a.php"><img class="right-5">Профиль</a>
										
									</li>
								</ul>							
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER-TOP END -->
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
		
		<section class="page-content">
			
			<div class="account-create-area">
				<div class="container">
					
					
					
					
									<div class="row">
						<div class="col-md-12">
							<div class="area-title">
								<h3 class="title-group gfont-1">Список выполненых задач</h3>
											  
							</div>
							
						</div>
					</div>		
							</div>
							</div>
						</form>
			           <HEADER> 
					   <br>
					   <?php
require_once dirname(__FILE__).'/ko.php';

$counter = mysql_query('SELECT COUNT(`id`) FROM `suc`');
$counter = mysql_fetch_array($counter);
$pages = intval( ($counter[0] - 1) / $conf['pp']) + 1;


if( isset($_GET['page'])) {

$page = (int) $_GET['page'];
	if ( $page > 0 && $page <= $pages ) {
		// Определяем с какого номера выводить
		$start = $page * $conf['pp'] - $conf['pp'];
		$sql = "SELECT * FROM `suc` ORDER BY `date` DESC LIMIT {$start}, {$conf['pp']}";
	}
	else { 
		$sql = 'SELECT * FROM `suc` ORDER BY `date` DESC LIMIT '. $conf['pp']; 
		$page = 1;
	}
}
else {
$sql = 'SELECT * FROM `suc` ORDER BY `date` DESC LIMIT '. $conf['pp'];
$page = 1;
}
$otvet = mysql_query($sql);
?>

 	<article> 
 		<!-- content -->
 		<?php
 		while($row = mysql_fetch_assoc($otvet)){
 			echo "<section>
 			<h2>{$row['name']}</h2>
           	<h3>{$row['email']}</h3>
			<h5><div class='text'><blockquote>{$row['text_comment']}</blockquote>			                       	
			</div></h5>
 			<p class=\"date\">{$row['date']}</p>
 			</section>";
 		
 		}
 		?>
		   
<nav>
<?php
echo "<div class='pagination-area'>
                                                 <div class='row'>
														<div class='col-xs-5'>
															<div class='pagination'>";
if( $page > 1 ) echo'<li><a href="suc.php?page='.($page-1).'"><</a>';
if( $page < $pages ) echo '<li><a href="suc.php?page='.($page+1).'">> </a>';
echo"</div>
</div>
														</div>
														<div class='col-xs-7'>
															<div class='product-result'>
																<span></span>
															</div>
														</div>";
?>

</nav>


		<style>
		.text {
    text-align:  center;
   }
* {
font-family: Arial, Helvetica, sans-serif;
}

/* Блоки */


article {
width:850px;
height:auto;
margin:auto;
}

article section {
border-bottom:1px dashed #BDECFE;
}

article section h2 {
color:#41738A;
font-size:25pt;
}

article section p {
font-size:10pt;
}

article section p.date {
font-size:9pt;
color:#516168;
text-align:right;
margin-bottom:0px;
padding-bottom:0px;
}
</style>			   
					   
					   
					   </HEADER>
					</div>
				</div>
			</div>
			

			<!-- End Account-Create-Area -->
			<p class="required text-right"></p>
		
		</section>
		
	
		</footer>
		<!-- FOOTER-AREA END -->
        
        <script>

    var textarea = null;
        window.addEventListener("load", function() {
            textarea = window.document.querySelector("textarea");
            textarea.addEventListener("keypress", function() {
                if(textarea.scrollTop != 0){
                    textarea.style.height = textarea.scrollHeight + "px";
                }
            }, false);
        }, false);
    
    </body>
	
</html> 