<?php
$mkvut=$_GET['xoakvut'];
include('dbconect.php');
$sql=" DELETE from kv_ut where kvut_ma='$mkvut'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=34";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=34";
    </script>
  <?php
} ?>