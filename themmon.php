<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.M_MA.value=="")
		{
			window.alert('bạn chưa nhập mã môn học');
			document.frmregister.M_MA.focus();
			return false;
		}
		if(document.frmregister.M_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên môn học');
			document.frmregister.M_TEN.focus();
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
	
		$u=$_POST['M_MA'];
		$p=$_POST['M_TEN'];
		include('dbconect.php');
		$sql="INSERT INTO MON(M_MA, M_TEN) values('$u','$p')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=37";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=37";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm môn học</h2>
            <table border='0'>
                <tr>
                    <td>Mã môn học</td>
                    <td><input type = "text" name = "M_MA" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Tên môn học</td>
                    <td><input type = "text" name = "M_TEN" size="20" id = "textfeild"></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật môn học </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã môn học</td>
    <td width="179" class="chuto">Tên môn học</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from MON";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['M_MA']; ?></td>
    <td align="center"><?php echo $rows['M_TEN']; ?></td>
    <td width="132" align="center"><a href="index.php?suamon=<?php echo $rows['M_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoamon=<?php echo $rows['M_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
