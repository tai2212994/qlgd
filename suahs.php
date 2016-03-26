<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.HS_MA.value=="")
		{
			window.alert('bạn chưa nhập mã học sinh');
			document.frmregister.HS_MA.focus();
			return false;
		}
		if(document.frmregister.HS_HOTEN.value=="")
		{
			window.alert('Bạn chưa nhập tên học sinh');
			document.frmregister.HS_HOTEN.focus();
			return false;
		}
			if(document.frmregister.HS_SDT.value=="")
		{
			window.alert('Bạn chưa nhập sdt phụ huynh');
			document.frmregister.HS_SDT.focus();
			return false;
		}
			if(document.frmregister.HS_EMAIL.value=="")
		{
			window.alert('Bạn chưa nhập email của phụ huynh');
			document.frmregister.HS_EMAIL.focus();
			return false;
		}
			if(document.frmregister.HS_HTCHA.value=="")
		{
			window.alert('Bạn chưa nhập họ tên cha');
			document.frmregister.HS_HTCHA.focus();
			return false;
		}
			
				if(document.frmregister.HS_HTME.value=="")
		{
			window.alert('Bạn chưa nhập họ tên mẹ');
			document.frmregister.HS_HTME.focus();
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
	if(isset($_GET['suahs']))
	{
		include('dbconect.php');
		$mhs=$_GET['suahs'];
		$sql="select * from hocsinh where HS_MA='$mhs'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatehs.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['HS_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN HỌC SINH</b></p></td>
    </tr>
  
  
  <tr>
    <td width="138" height="30" class="chu">Mã học sinh<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="HS_MA" value="<?php echo $rows['HS_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên học sinh<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_HOTEN" value="<?php echo $rows['HS_HOTEN'];?>" size="45">
    </td>
  </tr>
   <tr>
    <td height="31" class="chu">Ngày sinh<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_NGAYSINH" value="<?php echo $rows['HS_NGAYSINH'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Giới tính<font color="#FF0000"></font></td>
   <td>
    <input type="text" name="HS_GIOITINH" value="<?php echo $rows['HS_GIOITINH'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">SDT<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_SDT" value="<?php echo $rows['HS_SDT'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Email<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_EMAIL" value="<?php echo $rows['HS_EMAIL'];?>" size="45">
    </td>
  </tr>
    <tr>
    <td height="31" class="chu">Họ tên cha<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_HTCHA" value="<?php echo $rows['HS_HTCHA'];?>" size="45">
    </td>
  </tr>
    <tr>
    <td height="31" class="chu">Họ tên mẹ<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_HTME" value="<?php echo $rows['HS_HTME'];?>" size="45">
    </td>
  </tr>
    <tr>
    <td height="31" class="chu">Nghề nghiệp cha<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_NNCHA" value="<?php echo $rows['HS_NNCHA'];?>" size="45">
    </td>
  </tr>
    <tr>
    <td height="31" class="chu">Nghề nghiệp mẹ<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HS_NNME" value="<?php echo $rows['HS_NNME'];?>" size="45">
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Dân tộc<font color="#FF0000"></font></td>
     <td><select name="DT_MADT"> 
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
                            </select></td>
   
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
                             </select></td>

  </tr>
  <tr>
    <td height="31" class="chu">Ấp/kv<font color="#FF0000"></font></td>
<td>
    <select name="AK_MA">  
                <?php          include("dbconect.php");
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
                             </select></td>
    
  </tr>
  <tr>
    <td height="31" class="chu">Đối tượng<font color="#FF0000"></font></td>
    <td><select name="DT_MA">               
                <?php        include("dbconect.php");
				             mysql_query("SET NAMES 'utf8'");
			                 $qry="select * from Doituong";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1))
				                {
                                 ?>
                                 <option value="<?php echo $row1["DT_MA"];?>" 
                                                <?php if($rows["DT_MA"] == $row1["DT_TEN"]) echo "selected"; ?>>
                                                <?php echo $row1["DT_MA"];?></option>
				            <?php } ?>  
                             </select></td>
  </tr>
    <tr>
    <td height="31" class="chu">Khu vực ưu tiên<font color="#FF0000"></font></td>
   <td><select name="KVUT_MA">               
                <?php        include("dbconect.php");
				             mysql_query("SET NAMES 'utf8'");
			                 $qry="select * from KV_UT";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1))
				                {
                                 ?>
                                 <option value="<?php echo $row1["KVUT_MA"];?>" 
                                                <?php if($rows["KVUT_MA"] == $row1["KVUT_MA"]) echo "selected"; ?>>
                                                <?php echo $row1["KVUT_TEN"];?></option>
				            <?php } ?>  
                             </select></td></tr>
                             
  <tr>
    <td height="31" class="chu">Trạng thái<font color="#FF0000"></font></td>
   <td> <select name="TT_MA">               
                <?php        
				            include("dbconect.php");
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
                             </select></td></tr>
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