<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.TG_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã tôn giáo');
			document.frmregister.TG_MA.focus();
			return false;
		}
		if(document.frmregister.TG_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên tôn giáo');
			document.frmregister.TG_TEN.focus();
			return false;
		}
}
function MM_jumpMenu(targ,selObj,restore)
{ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function thoat()
{
	window.location="index.php";	
}

</script>
<?php
	if(isset($_GET['suatg']))
	{
		include('dbconect.php');
		$mtg=$_GET['suatg'];
		$sql="select * from tongiao where tg_ma='$mtg'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatetg.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['TG_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN TÔN GIÁO</b></p></td>
    </tr>
  
  
  <tr>
    <td width="138" height="30" class="chu">Mã tôn giáo<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="TG_MA" value="<?php echo $rows['TG_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên tôn giáo<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="TG_TEN" value="<?php echo $rows['TG_TEN'];?>" size="45">
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