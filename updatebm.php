<?php 
mysql_query("SET NAMES 'utf8'");
    $n=$_POST['BM_MA'];
	$h=$_POST['BM_TEN'];
	$m=$_POST['TCM_MA'];
	include("dbconect.php");
	$sql="UPDATE BO_MON SET BM_TEN='$h', TCM_MA= '$m' where AK_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=36";
                </script>
                <?php
				}
		else{?>
			    <script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=36";
                </script>
                <?php
}
?>