<?php 

if (isset($_POST["submit1"])) { 
include("bd.php"); 
$ztext2=trim($_REQUEST['ztext2']); 
$otext2=trim($_REQUEST['otext2']); 
$id=trim($_POST['red_id']); 
$update_sql = "UPDATE comments SET name='$ztext2', text_comment='$otext2' WHERE id='$id' "; 
mysql_query($update_sql); 

echo '<script type="text/javascript"> window.open("../formd.php","_top");</script>'; 
} 
if (isset($_POST["submit2"])) { 
include("bd.php"); 
$id=trim($_POST['red_id']); 
$delete_sql = "DELETE FROM comments WHERE id='$id' "; 
mysql_query($delete_sql); 

echo '<script type="text/javascript"> window.open("../formd.php","_top");</script>'; 
} 
?>	
 