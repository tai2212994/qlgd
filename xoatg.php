<?php
$mtg=$_GET['xoatg'];
include('dbconect.php');
$sql=" DELETE from tongiao where tg_ma='$mtg'";
$result=@mysql_query($sql);
if($result)
{
?>
	<script language="javascript">
		window.alert(' Xóa thành công');
		window.location="index.php?top=28";
    </script>
 <?php 
}
else
{
?>
	<script language="javascript">
		window.alert(' Xóa không thành công');
		window.location="index.php?top=28";
    </script>
  <?php
} ?>