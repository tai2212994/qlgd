<?php 
    $n=$_POST['HV_MA'];
	$h=$_POST['HV_TEN'];
	include("dbconect.php");
	$sql="UPDATE HOCVI SET HV_TEN='$h' where HV_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=39";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=39";
               </script>
              
			<?php  
			}
            ?>