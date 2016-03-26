<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.TTP_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã tỉnh/tp');
			document.frmregister.TTP_MA.focus();
			return false;
		}
		if(document.frmregister.TTP_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên tỉnh/tp');
			document.frmregister.TTP_TEN.focus();
			return false;
		}
}
function thoat()
{
	window.location="index.php";	
} 
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}</script>
<?php
if(isset($_POST['btnregister']))
{
	
		$u=$_POST['TTP_MA'];
        $p=$_POST['TTP_TEN'];
	
		include('dbconect.php');
		$sql="INSERT INTO TINH_TP(TTP_MA,TTP_TEN) values('$u','$p')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=32";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=32";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
           <font color="#0099FF"><h2>Thêm tỉnh/tp</h2>
            <table border='0'>
                 <tr>
                    <td>Mã tỉnh/tp</td>
                    <td><input type = "text" name = "TTP_MA" size="20" id= textfield></td>
                </tr>
                <tr>
                    <td>Tên tỉnh/tp</td>
                    <td><input type = "text" name = "TTP_TEN" size="20"id= textfield></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
            <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  />
              <br> </form>
              <hr color=”FF0000″ />
          <form>
			<h2>Cập nhật tỉnh/tp</h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã tỉnh/tp</td>
    <td width="179" class="chuto">Tên tỉnh/tp </td>
  </tr>
   <?php 
	include ('dbconect.php');
	$sql="select * from TINH_TP";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['TTP_MA']; ?></td>
    <td align="center"><?php echo $rows['TTP_TEN']; ?></td>
    <td width="135" align="center"><a href="index.php?suattp=<?php echo $rows['TTP_MA']; ?>">Sửa</a></td>
    <td width="136" align="center"><a href="index.php?xoattp=<?php echo $rows['TTP_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}

  ?>

</table>

        </form>

	
