
<form action="../php/delete.php" method="post"> 
<?php 
include("bd.php"); 
$id1 = $_POST['edit1']; 
$result = mysql_query("SELECT * FROM comments WHERE id='$id1'"); 
while ($row = mysql_fetch_array($result)){ 

echo " 
<fieldset> 
<input class='red_text3' type='hidden' name='red_id' value='{$row['id']}'/><h5 class='red_text1'>Пвсевдоним:</h5><br/> 
<input type='text' name='ztext2' class='red1' size=60 value='{$row['name']}'/><br/> 
<h5 class='red_text2'>Текст:</h5><br/> 
<textarea name='otext2' class='red2' rows=30>{$row['text_comment']}</textarea><br/> 
</fieldset> 
<br/> 
<fieldset> 
<button type='submit' name='submit1' class=submit4 >Редактировать запись</button><br/> 
<button type='submit2' name='submit2' class=submitd >Удалить запись</button><br/> 
</fieldset> 
</form>";} 

?> 
