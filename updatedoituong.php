<?php 
    $n=$_POST['DT_MA'];
	$h=$_POST['DT_TEN'];
	$k=$_POST['DT_TEN'];
	include("dbconect.php");
	$sql="UPDATE DOITUONG SET DT_TEN='$h', DT_DG='$k' where dt_ma='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=33";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=33";
               </script>
              
			<?php  
			}
            ?>