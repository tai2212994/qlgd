<?php
$mbm=$_GET['xoabm'];
include('dbconect.php');
$sql=" DELETE from bo_mon where bm_ma='$mbm'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=36";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=36";
    </script>
  <?php
} ?>