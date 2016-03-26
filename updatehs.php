<?php 
   $u=$_POST['HS_MA'];
		$p=$_POST['HS_HOTEN'];
		$k=$_POST['HS_NGAYSINH'];
		$h=$_POST['HS_GIOITINH'];
		$i=$_POST['HS_HTCHA'];
		$y=$_POST['HS_HTME'];
		$l=$_POST['HS_NNCHA'];
		$z=$_POST['HS_NNME'];
		$m=$_POST['KVUT_MA'];
		$n=$_POST['HS_SDT'];
		$o=$_POST['HS_EMAIL'];
		$a=$_POST['DT_MADT'];
		$b=$_POST['TG_MA'];
		$c=$_POST['AK_MA'];
		$d=$_POST['DT_MA'];
		$e=$_POST['TT_MA'];
		include('dbconect.php');
		$sql="UPDATE HOCSINH SET  HS_HOTEN='$p', HS_NGAYSINH='$k', HS_GIOITINH='$h',HS_HTCHA='$i',HS_HTME='$y', HS_NNCHA='$l',HS_NNME='$z', KVUT_MA='$m', HS_SDT='$n',HS_EMAIL='$o',DT_MADT='$a',TG_MA='$b', AK_MA='$c', DT_MA='$d',TT_MA='$e' WHERE HS_MA='$u'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=44";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=44";
               </script>
              
			<?php  
			}
            ?>