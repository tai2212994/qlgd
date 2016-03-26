<?php
$mak=$_GET['xoaapkv'];
include('dbconect.php');
$sql=" DELETE from ap_kv where ak_ma='$mak'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=29";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=29";
    </script>
  <?php
} ?>