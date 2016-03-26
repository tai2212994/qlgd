<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.namhoc.value=="")
		{
			window.alert('bạn chưa nhập năm học');
			document.frmregister.namhoc.focus();
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
	
		$u=$_POST['NAMHOC'];
		
		include('dbconect.php');
		$sql="INSERT INTO namhoc(namhoc) values('$u')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=38";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=38";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF" ><h2>Thêm năm học</h2>
            <table border='0'>
                <tr>
                    <td>Năm học</td>
                    <td><input type = "text" name = "NAMHOC" size="20" id = "textfeild"></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật năm học </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Năm học</td> </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from namhoc";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['NAMHOC']; ?></td>
    <td width="131" align="center"><a href="index.php?xoanamhoc=<?php echo $rows['NAMHOC']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
