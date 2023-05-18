<?php 
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";  
include "header_voter.php"; 
?>







<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<center>
<form action="submit_vote.php" name="vote" method="post" id="myform" >

<font size='6'> What is your favorite political party? <br><br><br>

<table border="2" style="width:50%"  >
<tr>
 <th> Vote</th>
 <th> Party Name </th>
</tr>
<tr> 
<td align="center"> <input type="radio" name="lan" value="BJP"> </td>
 <td align="center"> BJP </td>
</tr>

<tr> 
<td align="center"> <input type="radio" name="lan" value="CONGRESS"> </td>
<td align="center">CONGRESS </td>
</tr> 

<tr> 
<td align="center"><input type="radio" name="lan" value="AAP"></td> 
<td align="center">AAP</td>
</tr> 

<tr> 
<td align="center"><input type="radio" name="lan" value="NOTA"></td> 
<td align="center">  NOTA </td>
</tr> 

<tr> 
<td align="center"><input type="radio" name="lan" value="NIRDLIY"></td> 
<td align="center">  NIRDLIY</td>
</tr> 
</table>
</center>
</font><br>


<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px"  /></center>
</form>
