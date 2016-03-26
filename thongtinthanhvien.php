<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$u=$_SESSION['username'];
?>
<?php
include("dbconect.php");
$sql="select GV_HOTEN,GV_ngaysinh,GV_gioitinh,GV_SDT from giaovien where GV_MA='$u'";
$result=mysql_query($sql);
$rows=@mysql_fetch_array($result);
?>
<form name="form1" method="post" action="formlylichgv.php">
  <table width="600" height="158" border="1" class="tanle">
  <tr>
    <td width="125" align="center" class="chu"><b>Họ Tên</b></td>
    <td colspan="2" align="center"><a><?php echo $rows[0];?></a></td>
  <tr>
  <td width="125" align="center" class="chu"><b>Ngày Sinh</b></td>
    <td colspan="2" align="center"><?php echo $rows[1];?></td>
  </tr>
  <tr>
  <td width="125" align="center" class="chu"><b>Giới Tính</b></td>
    <td colspan="2" align="center" class="chu"><?php echo $rows[2];?></td>
  </tr>
  <tr>
  <td width="125" align="center" class="chu"><b>Số điện thoại</b></td>
    <td colspan="2" align="center"><?php echo $rows[3];?></td>
  </tr>
</table>

</form>