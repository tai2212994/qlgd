<?php
$mdtg=$_GET['xoadoituong'];
include('dbconect.php');
$sql=" DELETE from Doituong where DT_MA='$mdtg'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=33";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=33";
    </script>
  <?php
} ?>