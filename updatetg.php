
<?php 
    $n=$_POST['TG_MA'];
	$h=$_POST['TG_TEN'];
	include("dbconect.php");
	$sql="UPDATE TONGIAO SET TG_TEN='$h' where TG_MA='$n'";
	$result=mysql_query($sql);
	if($result)
			{
				?>
                <script language="javascript">
					window.alert('Bạn đã cập nhật thành công');
					window.location="index.php?top=28";
                </script>
                <?php
			}
		else{?>
				<script language="javascript">
					window.alert('Cập nhật không thành công');
					window.location="index.php?top=28";
                </script>
              
			<?php  }
            ?>