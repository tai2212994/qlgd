<?php
$mdt=$_GET['xoa'];
include('dbconect.php');
$sql=" DELETE from DANTOC where DT_MADT='$mdt'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=23";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=23";
    </script>
  <?php
} ?>