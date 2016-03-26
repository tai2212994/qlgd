<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.PX_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã xã/phường');
			document.frmregister.PX_MA.focus();
			return false;
		}
		if(document.frmregister.PX_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên xã/phường');
			document.frmregister.PX_TEN.focus();
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
	if(isset($_GET['suaxp']))
	{
		include('dbconect.php');
		$mxp=$_GET['suaxp'];
		$sql="select * from xa_phuong where px_ma='$mxp'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatexp.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['AK_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN XÃ/PHƯỜNG</b></p></td>
    </tr>
  <tr>
    <td width="164" height="30" class="chu"> Mã xã/phường <font color="#FF0000"></font></td>
    <td width="426"><input type="text" name="PX_MA" value="<?php echo $rows['PX_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên xã/phường<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="PX_TEN" value="<?php echo $rows['PX_TEN'];?>" size="45">
    </td>
  </tr>
    <tr>
    <td height="31" class="chu">Mã quận huyện<font color="#FF0000"></font></td>
   <td> <select name="QH_MA"> 
       <!-- <option value="$row[madv]" selected="selected"></option>-->
    <?php
	include('dbconect.php');
			                 $qry="select * from quan_huyen";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1)) {
                                 ?>
                                 <option value="<?php echo $row1["QH_MA"];?>" 
                                 <?php if($rows["QH_MA"] == $row1["PX_MA"]) echo"selected"; ?>>
                                 <?php echo $row1["QH_TEN"];?></option>
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