<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.TTP_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã tỉnh/tp');
			document.frmregister.TTP_MA.focus();
			return false;
		}
		if(document.frmregister.TTP_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên tỉnh/tp');
			document.frmregister.TTP_TEN.focus();
			return false;
		}
}
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function thoat()
{
	window.location="index.php";	
}
</script>
<?php
	if(isset($_GET['suattp']))
	{
		include('dbconect.php');
		$mttp=$_GET['suattp'];
		$sql="select * from tinh_tp where ttp_ma='$mttp'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatettp.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['TTP_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN TỈNH/TP</b></p></td>
    </tr>
  <tr>
    <td width="164" height="30" class="chu"> Mã tỉnh/tp <font color="#FF0000"></font></td>
    <td width="426"><input type="text" name="TTP_MA" value="<?php echo $rows['TTP_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên tỉnh/tp<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="TTP_TEN" value="<?php echo $rows['TTP_TEN'];?>" size="45">
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