<?php 
mysql_query("SET NAMES 'utf8'");
    $n=$_POST['TTP_MA'];
	$h=$_POST['TTP_TEN'];
	include("dbconect.php");
	$sql="UPDATE TINH_TP SET TTP_TEN='$h' where TTP_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=32";
                </script>
                <?php
				}
		else{?>
			    <script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=32";
                </script>
                <?php
}
?>