
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

<table width="648"><tr>
<td width="632" height="21" align="center" size="20" ><div align="center"><strong>BẢNG ĐIỂM CHI TIẾT</strong></div></td></tr>
<td width="632" height="21" align="center" size="20" ><div align="center"><strong>MÔN: </strong><? ?><strong>LỚP: </strong><? ?></strong></div></td></tr>
<tr>
<td width="632" height="21" align="center" size="20" ><div align="center"><strong>HỌC KỲ </strong><?PHP ?><strong>NĂM HỌC </strong><?PHP ?></div></td></tr>
<div align="center"></div></table>
<BR />
<BR />

<table width="644" border="1" >
			  <tr>
    <td     >STT</td>
   
    <td     >MÃ HS</td>  
     <td     >HỌ TÊN</td>
     <td      >KIỂM TRA MIỆNG</td>
    <td      COLspan="3">KIỂM TRA 15 PHÚT</td>
    <td      COLspan="3">KIỂM TRA 15 PHÚT</td>
    <td     >THI HỌC KỲ</td>
    <td     >TB HỌC KỲ</td>
  </tr>
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
  </tr>
  </table>
 
 <br />
 <br />
 <br />
 
<table width="637">
<?php
$now = getdate(); ?>
<tr>
<td width="233"><div align="center"><strong></strong></div></td>
<td width="392"><div align="center">Vĩnh Long, ngày 
  <?php echo $now["mday"]; ?> tháng <?php echo $now["mon"]; ?> năm   
  <?php echo $now["year"]; ?></div></td> 
</tr>
<tr>
<td height="43"><div align="center" rowspan ="2"></div></td>
<td><div align="center" rowspan ="2"><strong>GVBM</strong></div></td>
</tr>
<tr></tr>
<?php
		
  ?>
</table>
</form>
 