
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<table width="635">
<br>
<tr>
<td width="242" align="center">SỞ GD&ĐT TỈNH VĨNH LONG</td>
<td width="378" align="center">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</td>
</tr>
<tr></tr>
<td height="22" align="center">TRƯỜNG THPT PHAN VĂN HÒA</td>
<td align="center">Độc lập - Tự do - Hạnh phúc
</tr>
<tr>
<td height="12"></td><td><hr width="160" color="#000000" /></td>
</tr>
</table>
<table width="636">
<td width="623" height="70" align="center" size="20" ><div align="center"><strong>LÝ LỊCH HỌC SINH</strong></div></td>
<div align="center"></div></table>
<table width="644">
<?php
	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select * from hocsinh where gv.GV_MA='$u'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<tr>
<td width="295">Họ tên: <strong><?php echo $rows['GV_HOTEN'];?></strong></td>
<td colspan = "2">Giới Tính: <strong><?php echo $rows['GV_GIOITINH']; ?></strong></td>
</tr>
<tr>
<td colspan="3">Ngày sinh: <strong>
  <?php ?>
</strong> tháng <strong>
<?php ?>
</strong> năm <strong>
<?php ?>
</strong></td>
</tr>
<tr>
<td colspan="3">Nơi sinh:  <strong>
  <?php echo $rows['GV_CMND'];?>
</tr>
<tr>
<td width="295">Dân tộc: <strong>
  <?php echo $rows['DT_TENDT'];?>
</strong></td>
<td colspan="2">Tôn giáo: <strong>
  <?php echo $rows['TG_TEN'];?>
</strong></td>
</tr>
<tr>
<td width="295">Đối tượng: <strong>
  <?php ?>
</strong></td>
<td colspan="2">Khu vực ưu tiên: <strong>
  <?php ?>
</strong></td>
</tr>
<tr>
<td colspan="3" rowspan="2">Chỗ ở hiện nay: <strong>
  <?php ?>
</strong></td>
</tr>
<tr></tr>
<tr>
<td colspan="2">Họ tên cha: <strong>
  <?php ?>
</strong></td>
<td width="336"  >Nghề nghiệp: <strong>
  <?php ?>
</strong></td>
</tr>
<tr>
<td colspan="2">Họ tên mẹ: <strong>
  <?php ?>
</strong></td>
<td  >Nghề nghiệp: <strong>
  <?php ?>
</strong></td>
</tr>
<tr>
<td colspan="3">Số điện thoại liên hệ: <strong>
  <?php ?>
</strong></td>
</tr>
</table>
<table width="637">
<?php
$now = getdate(); ?>
<br /><br /><br />
<tr>

<td width="233"><div align="center"><strong>Xác nhận của phụ huynh</strong></div></td>
<td width="392"><div align="center">Vĩnh Long, ngày 
  <?php echo $now["mday"]; ?> tháng <?php echo $now["mon"]; ?> năm   
  <?php echo $now["year"]; ?></div></td> 
</tr>
<tr>
<td height="43"><div align="center" rowspan ="2">Ký tên</div></td>
<td><div align="center" rowspan ="2"><strong>HIỆU TRƯỞNG</strong></div></td>
</tr>
<tr></tr>
<?php
		}
  ?>
</table>
  