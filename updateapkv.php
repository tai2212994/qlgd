<?php 
mysql_query("SET NAMES 'utf8'");
    $n=$_POST['AK_MA'];
	$h=$_POST['AK_TEN'];
	$m=$_POST['PX_MA'];
	include("dbconect.php");
	$sql="UPDATE AP_KV SET AK_TEN='$h', PX_MA= '$m' where AK_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=29";
                </script>
                <?php
				}
		else{?>
			    <script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=29";
                </script>
                <?php
}
?>