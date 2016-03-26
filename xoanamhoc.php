<?php
$mnamhoc=$_GET['xoanamhoc'];
include('dbconect.php');
$sql=" DELETE from namhoc where namhoc='$mnamhoc'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=38";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=38";
    </script>
  <?php
} ?>