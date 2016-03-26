<?php 
        $u=$_POST['GV_MA'];
		$p=$_POST['GV_HOTEN'];
		$k=$_POST['GV_NGAYSINH'];
		$h=$_POST['GV_GIOITINH'];
		$m=$_POST['GV_CMND'];
		$n=$_POST['GV_SDT'];
		$o=$_POST['GV_EMAIL'];
		$a=$_POST['DT_MADT'];
		$b=$_POST['TG_MA'];
		$c=$_POST['AK_MA'];
		$d=$_POST['BM_MA'];
		$e=$_POST['TT_MA'];
	include("dbconect.php");
	$sql="UPDATE GIAOVIEN SET GV_HOTEN='$p', GV_NGAYSINH='$k', GV_GIOITINH='$h', GV_CMND='$m', GV_SDT='$n',GV_EMAIL='$o',DT_MADT='$a',TG_MA='$b', AK_MA='$c', BM_MA='$d',TT_MA='$e' where GV_MA='$u'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=43";
                </script>
				
                <?php
			}
            ?>