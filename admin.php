<?php
session_start(); 
?>
<html>

<head>
<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="css/style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
    </script>
</head>
    <body>
	<?php

if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
       }
else{
    
   $user=$_SESSION['login_user'];
    if ($user=="admin"){
          echo "<div class='page'>
  <div class='form'  >

    <table class='table-login'>
          <TR> <TD align='center' height='40pxs'>Админ панель</TD></TR>
       </table>
    <br>
												
													<div>
													<div class='row'>
														<div class='col-xs-5'>
															<div class='pagination'>
																<ul>
																	<li><a href='soz-panel.php'>Добавить новость</a></li>
																	<li><a href='form.php'>Работа с новостями</a></li>																
																	<li><a href='tov-panel.php'>Выбрать выполненые задания</a></li>
																	<li><a href='formt.php'>Редактировать</a></li>																
																	<li><a href='formd.php'>Удалить</a></li>
																
																	
																</ul>
															</div>
														</div>
														<div class='col-xs-7'>
															<div class='product-result'>
																<span></span>
															</div>
														</div>
															</div>
														</div>
													
													
												
    <table class='table-s'>
              <TR> <TD align='center'  height='40pxs'><a href='profile_a.php' style='color: rgb(255,255,255)'>Вернутся в профиль</a></TD></TR>
       </table>

      </form>
    </div>
</div>" ;
    }
    else {
         echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
    }
}
   



?>






<style>
    .image-p{
        
     position: relative;
        top: -20px;
        right: -100px;
          font-weight: 700;
  color: white;
  text-decoration: none;
  padding: .8em 1em calc(.8em + 3px);
  border-radius: 3px;
  background: rgb(240, 128, 128);
  box-shadow: 0 -3px rgb(139, 0, 0) inset;
  transition: 0.2s;
    }
    .image-p:hover{
        background: rgb(139, 0, 0);
    }
    .image-p:active {
         background: rgb(33,147,90);
  box-shadow: 0 3px rgb(33,147,90) inset;
    }
    textarea {
    position: relative;
    top: 40px;
    resize: none; 
    width: 100%;
   overflow: hidden;
        outline: 0;
  background: #f2f2f2;
  border: 2 ;
  box-sizing: border-box;
  font-size: 14px;
   }  
.page {
    
  width: 930px;
  padding: 0% 0% 0;
  margin-top: 75px;
 
}
.form {
width: 850px;
    height: auto;
max-height: 1450px;  
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  margin: 0 auto 100px;
  padding: 32px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 3px 3px 0 rgba(0, 0, 0, 0.24);
}
.table-login
{
       float: left; 
       position: relative;
       left: 300px;
       top: -32px;
       width: 240px;
       background: rgb(240, 128, 128);
       font-weight: 700;
       color: white;
       text-decoration: none;
}
    .table-s
{
       float: left; 
       position: relative;
       left: -32px;
       top: 25px;
       width: 850px;
       background: rgb(240, 128, 128);
       font-weight: 700;
       color: white;
       text-decoration: none;
}
.ztext {
  outline: 0;
  background: #f2f2f2;
  width: 350px;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
position: relative;
    top:20px;
    right:370px;
}
    .vtext {
  outline: 0;
  background: #f2f2f2;
  width: 350px;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
position: relative;
    top:60px;
    right:250px;
}
    .otext {
  outline: 0;
  background: #f2f2f2;
  width: 350px;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
position: relative;
    top:90px;
}
.form button {
    position:relative;
    top: 45px;
    right:140px;
    font-weight: 700;
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: rgb(240, 128, 128);
      box-shadow: 0 -3px rgb(139, 0, 0) inset;
      transition: 0.2s;
  width: 200px;
  border: 0;
  padding: 7px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover{ background: rgb(139, 0, 0); }
    .form button:active {
  background: rgb(33,147,90);
  box-shadow: 0 3px rgb(33,147,90) inset;
}.form button:focus {
  background: #43A047;
}
</style>
    </body>
</html>