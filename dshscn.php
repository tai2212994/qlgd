<table width="647"  border="1" class="tanle">
			  <tr>
    <td width="69" class="chuto">Mã HS</td>
    <td width="161" class="chuto">Họ tên</td> 
    <td width="173" class="chuto">Ngày sinh</td>
    <td width="71" class="chuto">Giới tính</td> 
    <td width="139" class="chuto">SĐT liên hệ</td>   
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from hocsinh";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['HS_MA']; ?></td>
    <td align="center"><?php echo $rows['HS_HOTEN']; ?></td>
     <td align="center"><?php echo $rows['HS_ngaysinh']; ?></td>
     <td align="center"><?php echo $rows['HS_gioitinh']; ?></td>
     <td align="center"><?php echo $rows['HS_SDT']; ?></td>
    <td width="71" align="center"><a href="index.php?suaapkv=<?php echo $rows['AK_MA']; ?>">Chi tiết</a></td>
    <td width="139" align="center"><a href="index.php?xoaapkv=<?php echo $rows['AK_MA']; ?>">Xem điểm</a></td>
  </tr>
  <?php
		}
  ?>

</table>