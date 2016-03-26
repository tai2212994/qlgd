<?php 
    $n=$_POST['DT_MADT'];
	$h=$_POST['DT_TENDT'];
	include("dbconect.php");
	$sql="UPDATE DANTOC SET DT_TENDT='$h' where dt_madt='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=23";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=23";
               </script>
              
			<?php  
			}
            ?>