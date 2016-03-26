<?php
$mqh=$_GET['xoaqh'];
include('dbconect.php');
$sql=" DELETE from quan_huyen where qh_ma='$mqh'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=31";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=31";
    </script>
  <?php
} ?>