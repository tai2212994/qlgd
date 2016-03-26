
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form width = "652">
<table width="1007">
<br>
<tr>
<td width="475" align="center">SỞ GD&ĐT TỈNH VĨNH LONG</td>
<td width="520" align="center">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</td>
</tr>
<tr></tr>
<td height="22" align="center">TRƯỜNG THPT PHAN VĂN HÒA</td>
<td align="center">Độc lập - Tự do - Hạnh phúc
</tr>
<tr>
<td height="12"></td><td><hr width="160" color="#000000" /></td>
</tr>
</table>

<table width="1004"><tr>
<td width="996" height="21" align="center" size="20" ><div align="center"><strong>BẢNG ĐIỂM TRUNG BÌNH LƠP</strong></div></td></tr><tr>
<td width="996" height="21" align="center" size="20" ><div align="center"><strong>HỌC KỲ <?PHP ?>, NĂM HỌC <?PHP ?></strong></div></td></tr>
<div align="center"></div></table>
<BR />
<strong>LỚP: </strong><?PHP ?><BR />

<table width="644" border="1"  >
			  <tr>
    <td    rowspan="2">STT</td>
   
    <td   rowspan="2">MÃ HS</td>  
    <td   rowspan="2">TOÁN</td>
    <td   rowspan="2">VẬT LÝ</td>
    <td   rowspan="2">HÓA HỌC</td>
    <td   rowspan="2">SINH HỌC</td>
    <td   rowspan="2">NGỮ VĂN</td>
    <td   rowspan="2">NGOẠI NGỮ</td>
    <td   rowspan="2">LỊCH SỬ</td>
    <td   rowspan="2">ĐỊA LÝ</td>
    <td   rowspan="2">GDCD</td>
    <td   rowspan="2">CÔNG NGHỆ</td>
    <td   rowspan="2">TIN HỌC</td>
    <td   rowspan="2">QP</td>
    <td   rowspan="2">THỂ DỤC</td>
    <td    colspan="2">XẾP LOẠI</td>
  </tr>
  <TR>
  
  <td   >HỌC LỰC</td>
  <td   >HẠNH KIỂM</td>
  </TR>
   <?php

include('dbconect.php');
?>
  <tr>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
    <td align="center"><?php  ?></td>
  </tr>
  </table>
 
 <br />
 <br />
 <br />
 
<table width="1003">
<?php
$now = getdate(); ?>
<tr>
<td width="496"><div align="center"><strong></strong></div></td>
<td width="495"><div align="center">Vĩnh Long, ngày 
  <?php echo $now["mday"]; ?> tháng <?php echo $now["mon"]; ?> năm   
  <?php echo $now["year"]; ?></div></td> 
</tr>
<tr>
<td height="43"><div align="center" rowspan ="2"></div></td>
<td><div align="center" rowspan ="2"><strong>HIỆU TRƯỞNG</strong></div></td>
</tr>
<tr></tr>
<?php
		
  ?>
</table>
</form>
 