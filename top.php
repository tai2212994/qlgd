<?php
	include('dbconect.php');
	$role=0;
	if(isset($_SESSION['username']))
	{
		$u=$_SESSION['username'];
			$sql="select * from taikhoan where TK_MA='$u'";
			$result=mysql_query($sql);
			$rows=mysql_fetch_array($result);
			$role=$rows['quyen'];
	}
?>
<div align="center">
<form action=""> 
<table width="950" border="0" cellpadding="0" cellspacing="0" class="mainmenu">
   <tr>
   <td width="950" align="center" valign="middle" style="background-color:#06C">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
           	<td>
			<div class="menu">
			<ul>
            	<li><a href="index.php" title="Trang Chủ">Trang Chủ</a></li>
				<li><a  title="Giới thiệu">Giới thiệu - Tin Tức  </a>
					<ul>
						<li><a class="drop" href="index.php?top=1">Giới thiệu</a></li>
                        <li><a class="drop" href="index.php?top=1">Tổ chức</a></li>
                        <li><a class="drop" href="index.php?top=2">Tin nhà trường</a></li>
						<li><a class="drop" href="index.php?top=3">Tin giáo dục</a></li>
					</ul>
				</li>
                <li><a  title="Tra cứu">Tra cứu   </a>
					<ul>
						<li><a class="drop" href="index.php?top=7">TKB Giáo viên</a></li>
                        <li><a class="drop" href="index.php?top=8" >TKB Lớp</a></li>
						<li><a class="drop" href="index.php?top=9">Xem điểm</a></li>
                    </ul>
				</li>
                <li><a  title="Tài liệu giảng dạy">Tài liệu   </a>
					<ul>
						<li><a class="drop" href="">Toán</a></li>
						<li><a class="drop" href="">Vật Lý</a></li>
                    </ul>
				</li>
                <li><a  title="Hoạt động">Hoạt động   </a>
				</li>
                 <?php
				if($role=='1')
				{
				?>
             	
				<li><a href="" title="Điểm"> Điểm   </a>
					<ul>
                    	<li><a class="drop" href="index.php?top=21">Nhập Điểm</a></li>
						
                    </ul>
				</li> 
                <li><a href="" title="Điểm"> Chủ nhiệm   </a>
					<ul>
                    	<li><a class="drop" href="index.php?top=45">Danh sách học sinh</a></li>
						
                    </ul>
				</li> 
                  <?php
				}
				?>
                 <?php
				if($role=='2')
				{
				?>
				<li><a  title="Cập nhật danh mục">Cập nhật danh mục </a>
					<ul>
                        <li><a class="drop" href="index.php?top=23">Cập nhật Dân tộc</a></li>
                        <li><a class="drop" href="index.php?top=28">Cập nhật Tôn giáo</a></li>
                         <li><a class="drop" href="index.php?top=29">Cập nhật Âp/Khu vực</a></li>
                         <li><a class="drop" href="index.php?top=30">Cập nhật Xã/Phường</a></li>
                         <li><a class="drop" href="index.php?top=31">Cập nhật Quận/Huyện</a></li>
                         <li><a class="drop" href="index.php?top=32">Cập nhật Tỉnh/Thành Phố</a></li>                        <li><a class="drop" href="index.php?top=33">Cập nhật Đối tượng</a></li>
                         <li><a class="drop" href="index.php?top=34">Cập nhật Khu vực ưu tiên </a></li>                       <li><a class="drop" href="index.php?top=35">Cập nhật Chức vụ</a></li>
                         <li><a class="drop" href="index.php?top=36">Cập nhật Bộ Môn</a></li>
                         <li><a class="drop" href="index.php?top=37">Cập nhật Môn Học</a></li>
                         <li><a class="drop" href="index.php?top=38">Cập nhật Năm Học</a></li>
                         <li><a class="drop" href="index.php?top=39">Cập nhật Học vị</a></li>
                         <li><a class="drop" href="index.php?top=41">Cập nhật Chuyên môn</a></li>
                         
           			</ul>
				</li>
                <li><a  title="Cập nhật danh mục">GV - HS</a>
					<ul>
                    <li><a class="drop" href="index.php?top=43">Thêm Giáo viên</a></li>
                    <li><a class="drop" href="index.php?top=44">Thêm Học sinh</a></li>
                    <li><a class="drop" href="index.php?top=40">Cấp tài khoản giáo viên</a></li>
                    <li><a class="drop" href="index.php?top=42">Cấp tài khoản học sinh</a></li>
           			</ul>
				</li>
              	   <?php
				}
				?>
			</ul>
     	</div>
     	</td>
   		</tr>
	</table>
	</td>
    </tr>
</table>
</form>
</div>