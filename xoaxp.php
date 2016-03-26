<?php
$mxp=$_GET['xoaxp'];
include('dbconect.php');
$sql=" DELETE from xa_phuong where px_ma='$mxp'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=30";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=30";
    </script>
  <?php
} ?>