<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.QH_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã xã/phường');
			document.frmregister.QH_MA.focus();
			return false;
		}
		if(document.frmregister.QH_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên xã/phường');
			document.frmregister.QH_TEN.focus();
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
	if(isset($_GET['suaqh']))
	{
		include('dbconect.php');
		$mqh=$_GET['suaqh'];
		$sql="select * from quan_huyen where qh_ma='$mqh'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updateqh.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['QH_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN QUẬN HUYỆN</b></p></td>
    </tr>
  <tr>
    <td width="164" height="30" class="chu"> Mã quận huyện <font color="#FF0000"></font></td>
    <td width="426"><input type="text" name="QH_MA" value="<?php echo $rows['QH_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên quận huyện<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="QH_TEN" value="<?php echo $rows['QH_TEN'];?>" size="45">
    </td>
  </tr>
    <tr>
    <td height="31" class="chu">Mã tỉnh/tp<font color="#FF0000"></font></td>
   <td> <select name="TTP_MA"> 
       <!-- <option value="$row[madv]" selected="selected"></option>-->
    <?php
	include('dbconect.php');
			                 $qry="select * from tinh_tp";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1)) {
                                 ?>
                                 <option value="<?php echo $row1["TTP_MA"];?>" 
                                 <?php if($rows["TTP_MA"] == $row1["TTP_MA"]) echo"selected"; ?>>
                                 <?php echo $row1["TTP_TEN"];?></option>
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