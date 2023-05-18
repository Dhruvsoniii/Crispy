<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;

 echo" <center><img src='vot.png' hight='300' width='300'></center>";
?> 
<p><center><legend><font color='#008000' size='18'>Online Voting System</font></legend></center>
    <p>&nbsp;&nbsp;</p>
	
<?php include "footer.php";?>
