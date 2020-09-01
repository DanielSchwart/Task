<?php
session_start(); 
?>
<?php

if(!isset($_SESSION['login_user'])) 
       {
echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
       }
else{
    
   $user=$_SESSION['login_user'];
    if ($user=="admin"){
          echo '' ;
    }
    else {
         echo '<script type="text/javascript"> window.open("../profile_a.php","_self");</script>' ;
    }
}
   



?>
<html>
<head>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
    </script>
</head>
    <body>
<div class="login-page">
  <div class="form"  >
<form class="login-form" action="edite.php" onload="resizeIframe(this)" enctype="multipart/form-data" method="post"> 
 <table class="table-login">
          <TR> <TD align="center" height="40pxs">Выбор Задачи для удаления</TD></TR>
       </table>
<select class=reg_select required class=edit1 name=edit1 > 
<option disabled selected>Выберите задачу</option> 
<?php 
include ("bd.php"); 
$select_sql = "SELECT id,name,text_comment FROM comments"; 
$result = mysql_query($select_sql); 
$row = mysql_fetch_array($result); 
do 
{ 
echo " <option name='ided' value='{$row['id']}'>{$row['id']}.{$row['name']}.{$row['text_comment']}</option>" ; 
} 
while($row = mysql_fetch_array($result)) 
?> 
</select> 
<button type="submit" name="submit" class=submit3 >Выбрать</button> 

<table class="table-s">
              <TR> <TD align="center"  height="40pxs"><a href="profile_a.php" style="color: rgb(255,255,255)">Вернутся в админ-панель</a></TD></TR>
       </table>

</form> 

    </div>
</div>


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
    </script>


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
    
        outline: 0;
  background: #f2f2f2;
  border: 2 ;
  box-sizing: border-box;
  font-size: 14px;
   }  
.login-page {
    
  width: 930px;
  padding: 0% 0% 0;
  margin: auto;
}
.form {
width: 850px;
    height: 150px;
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
       top: 108px;
       width: 914px;
       background: rgb(240, 128, 128);
       font-weight: 700;
       color: white;
       text-decoration: none;
}
.reg_select {
  outline: 0;
  background: #f2f2f2;
  width: 350px;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  font-size: 14px;
position: relative;
    top:20px;
    right:250px;
}
    
.form button {
    position:relative;
    top: 100px;
    right:300px;
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