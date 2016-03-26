<?php 
	include('dbconect.php');
	$sql="select * from gioithieu";
	$result=mysql_query($sql);
	
?>
	<table width="603" border="0">
  <tr>
    <td colspan="2" align="left"> <font size="4" color="#FF0000">Giới thiệu về trường THPT Phan Văn Hòa</font></td>
    </tr>
     <td height="17" colspan="2"><img src="anh/chuan.jpg"></td>
      <?php
		while($rows=mysql_fetch_array($result))
		{
	?>
  <tr>
    <td width="597" height="21"><font size="3" color="#0033FF"><?php echo $rows['ten'] ;?></font></td>
  </tr>
   <td height="17" colspan="2"><img src="anh/chuan.jpg"></td>
  <tr>
    <td><?php echo $rows['soluoc'] ;?></td>
  </tr>
  <tr>
    <td height="17" colspan="2"><img src="anh/chuan.jpg"></td>
    </tr>
  <?php
	}?>
        
</table>

