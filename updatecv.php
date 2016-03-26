<?php 
    $n=$_POST['CV_MA'];
	$h=$_POST['CV_TEN'];
	include("dbconect.php");
	$sql="UPDATE CHUCVU SET CV_TEN='$h' where CV_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=35";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=35";
               </script>
              
			<?php  
			}
            ?>