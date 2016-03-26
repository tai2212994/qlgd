<?php 
mysql_query("SET NAMES 'utf8'");
    $n=$_POST['QH_MA'];
	$h=$_POST['QH_TEN'];
	$m=$_POST['TTP_MA'];
	include("dbconect.php");
	$sql="UPDATE QUAN_HUYEN SET QH_TEN='$h', TTP_MA= '$m' where QH_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=31";
                </script>
                <?php
				}
		else{?>
			    <script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=31";
                </script>
                <?php
}
?>