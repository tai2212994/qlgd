<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
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
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function thoat()
{
	window.location="index.php";	
} </script>
<?php
if(isset($_POST['btnregister']))
{
	
		$u=$_POST['KVUT_MA'];
		$m=$_POST['KVUT_TEN'];
		$p=$_POST['KVUT_DG'];
		include('dbconect.php');
		$sql="INSERT INTO KV_UT(KVUT_MA,KVUT_MA,KVUT_DG) values('$u','m','$p')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=34";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=34";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm Khu vực ưu tiên</h2>
             <table width="602" border='0'>
                <tr>
                    <td width="110">Mã khu vực ưu tiên</td>
                    <td width="482"><input type = "text" name = "KVUT_MA" size="20" id = "textfeild"></td>
                </tr>
                  <tr>
                    <td width="110">Tên khu vực ưu tiên</td>
                    <td width="482"><input type = "text" name = "KVUT_TEN" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Diễn giải</td>
                    <td><input type = "text" name = "KVUT_DG" size="20" id = "textfeild"></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật Khu vực ưu tiên </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã khu vực ưu tiên</td>
    <td width="179" class="chuto">Tên khu vực ưu tiên</td> 
    <td width="179" class="chuto">Diễn giải</td> 
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from kv_ut";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['KVUT_MA']; ?></td>
     <td align="center"><?php echo $rows['KVUT_TEN']; ?></td>
    <td align="center"><?php echo $rows['KVUT_DG']; ?></td>
    <td width="132" align="center"><a href="index.php?suakvut=<?php echo $rows['KVUT_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoakvut=<?php echo $rows['KVUT_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
