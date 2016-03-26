<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.HV_MA.value=="")
		{
			window.alert('bạn chưa nhập mã học vị');
			document.frmregister.HV_MA.focus();
			return false;
		}
		if(document.frmregister.HV_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên học vị');
			document.frmregister.HV_TEN.focus();
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
	
		$u=$_POST['HV_MA'];
		
		$p=$_POST['HV_TEN'];
		include('dbconect.php');
		$sql="INSERT INTO HOCVI(HV_MA, HV_TEN) values('$u','$p')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=39";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=39";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm học vị</h2>
            <table border='0'>
                <tr>
                    <td>Mã học vị</td>
                    <td><input type = "text" name = "HV_MA" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Tên học vị</td>
                    <td><input type = "text" name = "HV_TEN" size="30" id = "textfeild"></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật Học vị </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã học vị</td>
    <td width="179" class="chuto">Tên học vị</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from hocvi";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['HV_MA']; ?></td>
    <td align="center"><?php echo $rows['HV_TEN']; ?></td>
    <td width="132" align="center"><a href="index.php?suahv=<?php echo $rows['HV_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoahv=<?php echo $rows['HV_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
