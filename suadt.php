<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.DT_MADT.value=="")
		{
			window.alert('Bạn chưa nhập mã dân tộc');
			document.frmregister.DT_MADT.focus();
			return false;
		}
		if(document.frmregister.DT_TENDT.value=="")
		{
			window.alert('Bạn chưa nhập tên dân tộc');
			document.frmregister.DT_TENDT.focus();
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
	if(isset($_GET['sua']))
	{
		include('dbconect.php');
		$mdt=$_GET['sua'];
		$sql="select * from dantoc where dt_madt='$mdt'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatedt.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['DT_MADT']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN DÂN TỘC</b></p></td>
    </tr>
  
  
  <tr>
    <td width="138" height="30" class="chu">Mã Dân Tộc<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="DT_MADT" value="<?php echo $rows['DT_MADT'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên Dân Tộc<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="DT_TENDT" value="<?php echo $rows['DT_TENDT'];?>" size="45">
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