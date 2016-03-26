<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.HV_MA.value=="")
		{
			window.alert('bạn chưa nhập mã học vị');
			document.frmregister.HV_MA.focus();
			return false;
		}
		if(document.frmregister.HV_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên học vị');
			document.frmregister.HV_TEN.focus();
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
	if(isset($_GET['suahv']))
	{
		include('dbconect.php');
		$mhv=$_GET['suahv'];
		$sql="select * from HOCVI where hv_ma='$mhv'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatehv.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['HV_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN HỌC VỊ</b></p></td>
    </tr>
  
  
  <tr>
    <td width="138" height="30" class="chu">Mã học vị<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="HV_MA" value="<?php echo $rows['HV_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên học vị<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="HV_TEN" value="<?php echo $rows['HV_TEN'];?>" size="45">
    </td>
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