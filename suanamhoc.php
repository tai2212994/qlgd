<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.namhoc.value=="")
		{
			window.alert('bạn chưa nhập năm học');
			document.frmregister.namhoc.focus();
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
	if(isset($_GET['suanamhoc']))
	{
		include('dbconect.php');
		$mnamhoc=$_GET['suanamhoc'];
		$sql="select * from namhoc where namhoc='$mnamhoc'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatenamhoc.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['NAMHOC']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN NĂM HỌC</b></p></td>
    </tr>
  
  
  <tr>
    <td width="138" height="30" class="chu">Năm học<font color="#FF0000"></font></td>
    <td width="417"><input type="text" name="NAMHOC" value="<?php echo $rows['NAMHOC'];?>" size="45"></td>
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