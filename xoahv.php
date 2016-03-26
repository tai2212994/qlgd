<?php
$mhv=$_GET['xoahv'];
include('dbconect.php');
$sql=" DELETE from HOCVI where HV_MA='$mhv'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=39";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=39";
    </script>
  <?php
} ?>