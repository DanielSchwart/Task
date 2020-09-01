<?php 

if (isset($_POST["submit1"])) { 
include("bd.php"); 
$ztext2=trim($_REQUEST['ztext2']); 
$otext2=trim($_REQUEST['otext2']); 
$id=trim($_POST['red_id']); 
$insert_sql = "INSERT INTO suc SET name='$ztext2', text_comment='$otext2'  "; 
mysql_query($update_sql); 
$delete_sql = "DELETE FROM comments WHERE id='$id' "; 
mysql_query($delete_sql); 
echo '<script type="text/javascript"> window.open("../forms.php","_top");</script>'; 
 
} 
?>	
 