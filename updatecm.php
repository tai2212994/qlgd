<?php 
    $n=$_POST['CM_MA'];
	$h=$_POST['CM_TEN'];
	include("dbconect.php");
	$sql="UPDATE CHUYENMON SET CM_TEN='$h' where CM_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=41";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=41";
               </script>
              
			<?php  
			}
            ?>