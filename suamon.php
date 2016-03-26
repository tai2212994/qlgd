<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.M_MA.value=="")
		{
			window.alert('bạn chưa nhập mã môn học');
			document.frmregister.M_MA.focus();
			return false;
		}
		if(document.frmregister.M_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên môn học');
			document.frmregister.M_TEN.focus();
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
	if(isset($_GET['suamon']))
	{
		include('dbconect.php');
		$mmon=$_GET['suamon'];
		$sql="select * from mon where m_ma='$mmon'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatemon.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['M_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN MÔN HỌC</b></p></td>
    </tr>

  <tr>
    <td width="138" height="30" class="chu">Mã môn học<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="M_MA" value="<?php echo $rows['M_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên môn học<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="M_TEN" value="<?php echo $rows['M_TEN'];?>" size="45">
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