<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.KVUT_MA.value=="")
		{
			window.alert('bạn chưa nhập mã khu vực ưu tiên');
			document.frmregister.KVUT_MA.focus();
			return false;
		}
		if(document.frmregister.KVUT_DG.value=="")
		{
			window.alert('Bạn chưa nhập diễn giải');
			document.frmregister.KVUT_DG.focus();
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
	if(isset($_GET['suakvut']))
	{
		include('dbconect.php');
		$mkvut=$_GET['suakvut'];
		$sql="select * from kv_ut where kvut_mat='$mkvut'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatekvut.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['KVUT_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN KHU VỰC ƯU TIÊN</b></p></td>
    </tr>

  <tr>
    <td width="138" height="30" class="chu">Mã khu vực ưu tiên<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="KVUT_MA" value="<?php echo $rows['KVUT_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên khu vực ưu tiên<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="KVUT_DG" value="<?php echo $rows['KVUT_MA'];?>" size="45">
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