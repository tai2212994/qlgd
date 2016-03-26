<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.DT_MADT.value=="")
		{
			window.alert('bạn chưa nhập mã dân tộc');
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
	
		$u=$_POST['DT_MADT'];
		
		$p=$_POST['DT_TENDT'];
		include('dbconect.php');
		$sql="INSERT INTO DANTOC(DT_MADT, DT_TENDT) values('$u','$p')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=23";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=23";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm dân tộc</h2>
            <table border='0'>
                <tr>
                    <td>Mã dân tộc</td>
                    <td><input type = "text" name = "DT_MADT" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Tên dân tộc</td>
                    <td><input type = "text" name = "DT_TENDT" size="20" id = "textfeild"></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật dân tộc </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã Dân Tộc</td>
    <td width="179" class="chuto">Tên Dân Tộc</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from DANTOC";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['DT_MADT']; ?></td>
    <td align="center"><?php echo $rows['DT_TENDT']; ?></td>
    <td width="132" align="center"><a href="index.php?sua=<?php echo $rows['DT_MADT']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoa=<?php echo $rows['DT_MADT']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
