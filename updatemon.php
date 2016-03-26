<?php 
    $n=$_POST['M_MA'];
	$h=$_POST['M_TEN'];
	include("dbconect.php");
	$sql="UPDATE MON SET M_TEN='$h' where M_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=37";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=37";
               </script>
              
			<?php  
			}
            ?>