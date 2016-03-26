<?php 
mysql_query("SET NAMES 'utf8'");
    $n=$_POST['PX_MA'];
	$h=$_POST['PX_TEN'];
	$m=$_POST['QH_MA'];
	include("dbconect.php");
	$sql="UPDATE XA_PHUONG SET PX_TEN='$h', QH_MA= '$m' where PX_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=30";
                </script>
                <?php
				}
		else{?>
			    <script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=30";
                </script>
                <?php
}
?>