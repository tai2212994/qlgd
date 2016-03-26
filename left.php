<div class="left_menu">
<ul>
	<li class="mc"><a href="index.php">TRANG CHỦ</a></li>
    	<?php
		if(isset($_SESSION['username']))
		{?>
        	<li class="c"><a href="index.php?left=3">Thông tin thành viên</a></li>
            <li class="c"><a href="index.php?left=6">Lý lịch</a></li>
			<li class="c"><a href="index.php?left=4">Thoát</a></li>
            <?php
			require_once('dbconect.php');
            $u=$_SESSION['username'];
			$sql="select * from taikhoan where TK_MA='$u'";
			$result=mysql_query($sql);
			$rows=mysql_fetch_array($result);
			if($rows['quyen']=='2')
			{
				?>
                <li class="c"><a href="index.php?left=5">Phân quyền tài khoản</a></li>
                <?php
					
			}
		}
		else
		{
			?>
			<li class="c"><a href="index.php?left=2">Đăng Nhập</a></li>
            <li class="c"><a href="index.php?left=2">Đổi mật khẩu</a></li>
            <?php	
		}
		if(isset($_SESSION['tour']))
		{
		}
	?>
		<li class="mc"><a href="">Tin nhà trường</a></li>
        <li class="mc"><a href="">Tin giáo dục</a></li>
        <?php
			require_once('dbconect.php');
			$sql="select * from tourdulich where maloaitour='1'";
			$result=mysql_query($sql);
			while($rows=@mysql_fetch_array($result))
			{
			?>
                <li class="c"><a href="index.php?tour=<?php echo $rows['matour'] ;?>"><?php echo $rows['tentour'] ;?></a></li>
             <?php	
			}
		?>
        
    		<?php
			require_once('dbconect.php');
			$sql="select * from tourdulich where maloaitour='2'";
			$result=mysql_query($sql);
			while($rows=@mysql_fetch_array($result))
			{
			?>
                <li class="c"><a href="index.php?tour=<?php echo $rows['matour'] ;?>"><?php echo $rows['tentour'] ;?></a></li>
             <?php	
			}
		?>
  		
        	<?php
			require_once('dbconect.php');
			$sql="select * from tourdulich where maloaitour='3'";
			$result=mysql_query($sql);
			while($rows=@mysql_fetch_array($result))
			{
			?>
                <li class="c"><a href="index.php?tour=<?php echo $rows['matour'] ;?>"><?php echo $rows['tentour'] ;?></a></li>
             <?php	
			}
		?>
         
 	</ul>    
</div>  
