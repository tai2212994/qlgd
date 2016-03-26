<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.CM_MA.value=="")
		{
			window.alert('bạn chưa nhập mã chuyên môn');
			document.frmregister.CM_MA.focus();
			return false;
		}
		if(document.frmregister.CM_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên chuyên môn');
			document.frmregister.CM_TEN.focus();
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
	
		$u=$_POST['CM_MA'];
		
		$p=$_POST['CM_TEN'];
		include('dbconect.php');
		$sql="INSERT INTO CHUYENMON(CM_MA,CM_TEN) values('$u','$p')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=41";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=41";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm chuyên môn</h2>
            <table border='0'>
                <tr>
                    <td>Mã chuyên môn</td>
                    <td><input type = "text" name = "CM_MA" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Tên chuyên môn</td>
                    <td><input type = "text" name = "CM_TEN" size="30" id = "textfeild"></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật chuyên môn</h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã chuyên môn</td>
    <td width="179" class="chuto">Tên chuyên môn</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from chuyenmon";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['CM_MA']; ?></td>
    <td align="center"><?php echo $rows['CM_TEN']; ?></td>
    <td width="132" align="center"><a href="index.php?suacm=<?php echo $rows['CM_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoacm=<?php echo $rows['CM_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
