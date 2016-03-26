<?php 
    $n=$_POST['KVUT_MA'];
	$m=$_POST['KVUT_TEN'];
	$h=$_POST['KVUT_DG'];
	include("dbconect.php");
	$sql="UPDATE KV_UT SET KVUT_DG='$h' KVUT_TEN='$m' where KVUT_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=34";
                </script>
				
                <?php
			}
		else{?>
				
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=34";
               </script>
              
			<?php  
			}
            ?>