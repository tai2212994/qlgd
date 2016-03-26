<?php
$mhv=$_GET['xoacm'];
include('dbconect.php');
$sql=" DELETE from chuyenmon where CM_MA='$mhv'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=41";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=41";
    </script>
  <?php
} ?>