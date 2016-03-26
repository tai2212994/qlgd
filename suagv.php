<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.GV_MA.value=="")
		{
			window.alert('bạn chưa nhập mã giáo viên');
			document.frmregister.GV_MA.focus();
			return false;
		}
		if(document.frmregister.GV_HOTEN.value=="")
		{
			window.alert('Bạn chưa nhập tên giáo viên');
			document.frmregister.GV_HOTEN.focus();
			return false;
		}
			if(document.frmregister.GV_SDT.value=="")
		{
			window.alert('Bạn chưa nhập sdt giáo viên');
			document.frmregister.GV_SDT.focus();
			return false;
		}
			if(document.frmregister.GV_EMAIL.value=="")
		{
			window.alert('Bạn chưa nhập email của giáo viên');
			document.frmregister.GV_EMAIL.focus();
			return false;
		}
			if(document.frmregister.GV_CMND.value=="")
		{
			window.alert('Bạn chưa nhập số cmnd');
			document.frmregister.GV_CMND.focus();
			return false;
		}
			
		
}
function MM_jumpMenu(targ,selObj,restore)
{ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<?php
	if(isset($_GET['suagv']))
	{
		include('dbconect.php');
		$mgv=$_GET['suagv'];
		$sql="select * from GIAOVIEN where GV_MA='$mgv'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updategv.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['GV_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN GIÁO VIÊN</b></p></td>
    </tr>
  
  
  <tr>
    <td width="138" height="30" class="chu">Mã giáo viên<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="GV_MA" value="<?php echo $rows['GV_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên giáo viên<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="GV_HOTEN" value="<?php echo $rows['GV_HOTEN'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Ngày sinh<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="GV_NGAYSINH" value="<?php echo $rows['GV_NGAYSINH'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Giới tính<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="GV_GIOITINH" value="<?php echo $rows['GV_GIOITINH'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">CMND<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="GV_CMND" value="<?php echo $rows['GV_CMND'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">SDT<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="GV_SDT" value="<?php echo $rows['GV_SDT'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Email<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="GV_EMAIL" value="<?php echo $rows['GV_EMAIL'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Dân tộc<font color="#FF0000"></font></td>
    <td> <select name="DT_MADT"> 
               <!-- <option value="$row[DT_MADT]" selected="selected"></option>-->
                <?php
				include("dbconect.php");
				             mysql_query("SET NAMES 'utf8'");
			                 $qry="select * from DANTOC";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1)) {
                                 ?>
                                 <option value="<?php echo $row1["DT_MADT"];?>" 
                                                <?php if($rows["DT_MADT"] == $row1["DT_MADT"]) echo "selected"; ?>>
                                                <?php echo $row1["DT_TENDT"];?></option>
				            <?php } ?>  
                            </select>
   </td>
  </tr>
  <tr>
    <td height="31" class="chu">Tôn giáo<font color="#FF0000"></font></td>
 <td>
     <select name="TG_MA"> 
                <?php        include("dbconect.php");
				             mysql_query("SET NAMES 'utf8'");
			                 $qry="select * from TONGIAO";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1))
				                {
                                 ?>
                                 <option value="<?php echo $row1["TG_MA"];?>" 
                                                <?php if($rows["TG_MA"] == $row1["TG_MA"]) echo "selected"; ?>>
                                                <?php echo $row1["TG_TEN"];?></option>
				            <?php } ?>  
                             </select>
</td>
  </tr>
  <tr>
    <td height="31" class="chu">Ấp/kv<font color="#FF0000"></font></td>
<td>
    <select name="AK_MA">  
                <?php
				include("dbconect.php");
				             mysql_query("SET NAMES 'utf8'");
			                 $qry="select * from AP_KV";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1))
				                {
                                 ?>
                                 <option value="<?php echo $row1["AK_MA"];?>" 
                                                <?php if($rows["AK_MA"] == $row1["AK_MA"]) echo "selected"; ?>>
                                                <?php echo $row1["AK_TEN"];?></option>
				            <?php } ?>  
                             </select>
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Bộ môn<font color="#FF0000"></font></td>
    <td><select name="BM_MA">               
                <?php      include("dbconect.php");  
				             mysql_query("SET NAMES 'utf8'");
			                 $qry="select * from BO_MON";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1))
				                {
                                 ?>
                                 <option value="<?php echo $row1["BM_MA"];?>" 
                                                <?php if($rows["BM_MA"] == $row1["BM_MA"]) echo "selected"; ?>>
                                                <?php echo $row1["BM_TEN"];?></option>
				            <?php } ?>  
                             </select></td>
  </tr>
  <tr>
    <td height="31" class="chu">Trạng thái<font color="#FF0000"></font></td>
    <td><select name="TT_MA">               
                <?php        include("dbconect.php");
				             mysql_query("SET NAMES 'utf8'");
			                 $qry="select * from TRANGTHAI";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1))
				                {
                                 ?>
                                 <option value="<?php echo $row1["TT_MA"];?>" 
                                                <?php if($rows["TT_MA"] == $row1["TT_MA"]) echo "selected"; ?>>
                                                <?php echo $row1["TT_TEN"];?></option>
				            <?php } ?>  
                             </select></td>
  </tr>
  <tr>
    <td height="85" colspan="2">
    <input type = "submit" value = "Cập Nhật">
    <input type = "submit" value = "Thoát"></td>
  </tr>
  </table>
  </div>
</form>
<?php
	}
?>