<link rel="stylesheet" type="text/css" href="css/style.css" />
<script>
function thoat()
{
	window.location="index.php";	
}
</script>
<?php
	include('dbconect.php');
	 $sql="select * from taikhoan where quyen !=0";
	 $result=mysql_query($sql);
?>
<form action="thucthiphanquyen.php" method="post" name="formphanquyen">
	<table width="580" border="0">
 	<tr>
    	<td colspan="2"><font size="5" color="#0066FF">Phân quyền cho thành viên</font></td>
      </tr>
     <tr>
	  <td colspan="2"><img src="anh/chuan.jpg"></td>
  	</tr>
  <tr>
    <td height="42" class="chu">Username</td>
    <td>
    	<select name="cbbtentv">
 			<?php
	 			while($rows=mysql_fetch_array($result))
	 			{
					?>
				 	<option value="<?php echo $rows['TK_MA'];?>"><?php echo $rows['TK_MA'];?></option>
                    <?php
	 			}
			?>       	
        </select>
    </td>
  </tr>
  <tr>
    <td height="44" class="chu">Quyền</td>
    <td>
    	<select name="cbbquyen">
        	<option value="2">Admin</option>
        	<option value="3">CB phục trách chuyên môn</option>
            <option value="4">Hiệu trưởng/Phó hiệu trưởng</option>
        </select>
    </td>
  </tr>
  <tr>
  	<td colspan="2" align="center"><input name="btnphanquyen" type="submit" value="Cập nhật">
    	<input name="btnthoat" type="button" value="Thoát" onClick="return thoat();" >
    </td>
    </tr>
</table>
</form>
