
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form width = "652">
<table width="651">
<br>
<tr>
<td width="243" align="center">SỞ GD&ĐT TỈNH VĨNH LONG</td>
<td width="396" align="center">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</td>
</tr>
<tr></tr>
<td height="22" align="center">TRƯỜNG THPT PHAN VĂN HÒA</td>
<td align="center">Độc lập - Tự do - Hạnh phúc
</tr>
<tr>
<td height="12"></td><td><hr width="160" color="#000000" /></td>
</tr>
</table>

<table width="648">
<td width="632" height="70" align="center" size="20" ><div align="center"><strong>LÝ LỊCH GIÁO VIÊN</strong></div></td>
<div align="center"></div></table>

<table width="644">
<?php

	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select GV_MA, GV_HOTEN, day(GV_NGAYSINH) ngay,month(GV_NGAYSINH) thang, year
(GV_NGAYSINH) nam, GV_GIOITINH, GV_CMND,GV_EMAIL, GV_SDT,dt.DT_TENDT,tg.TG_TEN from GIAOVIEN gv, dantoc dt, tongiao tg where gv.DT_MADT=DT.DT_MADT AND gv.TG_MA=tg.TG_MA and gv_ma='gv003'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<tr>
<td width="361">Họ tên: <strong><?php echo $rows['GV_HOTEN'];?></strong></td>
<td colspan = "2">Giới Tính: <strong><?php echo $rows['GV_GIOITINH']; ?></strong></td>
</tr>
<tr>
<td colspan="3">Ngày sinh: <strong>
<?php echo $rows['ngay']?>
</strong> tháng <strong>
<?php echo $rows['thang'] ?>
</strong> năm <strong>
<?php echo $rows['nam']?>
</strong></td>
</tr>
<tr>
<td width="361">Số CMND:  <strong>
  <?php echo $rows['GV_CMND'];?>
</strong></td>
</tr>
<tr>
<td width="361">Dân tộc: <strong>
  <?php echo $rows['DT_TENDT'];?>
</strong></td>
<td colspan="2">Tôn giáo: <strong>
  <?php echo $rows['TG_TEN'];?>
</strong></td>
</tr>
<?php
		}
  ?>
  <?php
	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select gv_ma, b.ak_ten, c.px_ten, d.qh_ten, e.ttp_ten from giaovien a, ap_kv b, xa_phuong c, quan_huyen d, tinh_tp e where a.ak_ma=b.ak_ma and b.px_ma=c.px_ma and c.qh_ma=d.qh_ma and d.ttp_ma=e.ttp_ma and gv_ma='gv003'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<tr>
<td colspan="3" rowspan="2">Chỗ ở hiện nay: <strong>
<?php echo $rows['ak_ten']?> - <?php echo $rows['px_ten'] ?> - <?php echo $rows['qh_ten'] ?> - <?php echo $rows['ttp_ten'] ?>
</strong></td>
<?php
		}
		?>
</tr>
<tr></tr>
 <?php
	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select a.gv_ma, b.hv_ten, c.cm_ten from tdcm a, hocvi b, chuyenmon c where a.hv_ma=b.hv_ma and a.cm_ma=c.cm_ma and gv_ma='gv003'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<tr>
<td colspan="3">Học vị: <strong>
  <?php echo $rows['hv_ten']?>
</strong></td></tr>
<tr>
<td colspan="3">Chuyên Môn: <strong>
  <?php echo $rows['cm_ten']?>
</strong></td>
</tr>
<?php
		}
		?>
<tr>
 <?php
	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select a.gv_ma, b.nn_ten, c.ccnn_ten from tdnn a, ngoaingu b, chungchi_nn c where a.nn_ma=b.nn_ma and a.ccnn_ma=c.ccnn_ma and gv_ma='gv003'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<td colspan="3">Trình độ ngoại ngữ: <strong>
  <?php echo $rows['nn_ten']?> - <?php echo $rows['ccnn_ten']?>
</strong></td>
</tr>
<?php
		}
		?>
        
<tr>
<?php
	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select a.gv_ma, c.ccth_ten from tdth a, chungchi_th c where a.ccth_ma=c.ccth_ma and gv_ma='gv003'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<td colspan="3">Trình độ tin học: <strong>
  <?php echo $rows['ccth_ten']?>
</strong></td>

</tr>
<?php
		}
		?>
  <?php
	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select a.gv_ma, b.bm_ten from giaovien a, bo_mon b where a.bm_ma_ma=b.bm_ma_ma and gv_ma='gv003'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<tr>
<td colspan="3">Bộ môn: <strong>
  <?php echo $rows['bm_ten']?>
</strong></td>
</tr>
<?php
		}
		?>
<tr>
<td colspan="3">Chức vụ: <strong>
  <?php  ?>
</strong></td>
</tr>
<tr>
<td colspan="2">Thời gian đảm nhiệm chức vụ: Từ ngày: <strong>
  <?php ?>
</strong></td>
<td width="270">đến ngày: <strong>
  <?php ?>
</strong></td>
</tr>
 <?php
	$u=$_SESSION['username'];
	include ('dbconect.php');
	$sql="select gv_email, gv_sdt from giaovien where gv_ma='gv003'";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
<tr>
<td colspan="3">Địa chỉ liên hệ: Email: <strong>
  <?php echo $rows['gv_email'] ?>
</strong></td>
</tr>
<tr>
<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số điện thoại: <strong>
  <?php echo $rows['gv_sdt']?>
</strong></td>
</tr>
<?php
}
?>
</table>
 
 <br />
 <br />
 <br />
 
<table width="637">
<?php
$now = getdate(); ?>
<tr>
<td width="233"><div align="center"><strong>Xác nhận của giáo viên</strong></div></td>
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
		
  ?>
</table>
</form>
 