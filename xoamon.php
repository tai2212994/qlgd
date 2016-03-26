<?php
$mmon=$_GET['xoamon'];
include('dbconect.php');
$sql=" DELETE from mon where m_ma='$mmon'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=37";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=37";
    </script>
  <?php
} ?>