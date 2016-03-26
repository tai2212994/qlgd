<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.BM_MA.value=="")
		{
			window.alert('bạn chưa nhập mã bộ môn');
			document.frmregister.BM_MA.focus();
			return false;
		}
		if(document.frmregister.BM_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên bộ môn');
			document.frmregister.BM_TEN.focus();
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
	if(isset($_GET['suabm']))
	{
		include('dbconect.php');
		$mbm=$_GET['suabm'];
		$sql="select * from bo_mon where bm_ma='$mbm'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="updatebm.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="187" border="0">
  <tr>
  	<input name="txtmaks" type="hidden" value="<?php echo $rows['BM_MA']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA THÔNG TIN BỘ MÔN</b></p></td>
    </tr>
  <tr>
    <td width="164" height="30" class="chu"> Mã Bộ môn <font color="#FF0000"></font></td>
    <td width="426"><input type="text" name="BM_MA" value="<?php echo $rows['BM_MA'];?>" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên Bộ môn<font color="#FF0000"></font></td>
    <td>
    <input type="text" name="BM_TEN" value="<?php echo $rows['BM_TEN'];?>" size="45">
    </td>
  </tr>
    <tr>
    <td height="31" class="chu">Mã Tổ chuyên môn<font color="#FF0000"></font></td>
   <td> <select name="TCM_MA"> 
       <!-- <option value="$row[madv]" selected="selected"></option>-->
    <?php
	include('dbconect.php');
			                 $qry="select * from TOCM";
			                 $result1 = mysql_query($qry);
			                 while ($row1 = mysql_fetch_array($result1)) {
                                 ?>
                                 <option value="<?php echo $row1["TCM_MA"];?>" 
                                 <?php if($rows["TCM_MA"] == $row1["TCM_MA"]) echo"selected"; ?>>
                                 <?php echo $row1["TCM_TEN"];?></option>
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