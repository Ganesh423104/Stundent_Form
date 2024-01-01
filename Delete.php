<?php 
include "confi.php";
if(isset($_GET['u_id']))
{
  $del=mysqli_query($conn,"delete from one where id ='".$_GET['u_id']."'") or die(mysqli_error($conn));
	if($del)
	{
		echo "<script>";
		echo "alert('Student Deleted Successfully..!');";
		echo "window.location.href='tables.php';";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Error in Student delete');";
		echo "window.location.href='tables.php';";
		echo "</script>";
	}
}
?>
