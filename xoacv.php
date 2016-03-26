<?php
$mcv=$_GET['xoacv'];
include('dbconect.php');
$sql=" DELETE from CHUCVU where CV_MA='$mcv'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=35";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=35";
    </script>
  <?php
} ?>