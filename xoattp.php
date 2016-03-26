<?php
$mttp=$_GET['xoattp'];
include('dbconect.php');
$sql=" DELETE from tinh_tp where ttp_ma='$mttp'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=32";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=32";
    </script>
  <?php
} ?>