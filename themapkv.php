<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.AK_MA.value=="")
		{
			window.alert('bạn chưa nhập mã ấp/kv');
			document.frmregister.AK_MA.focus();
			return false;
		}
		if(document.frmregister.AK_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên ấp/kv');
			document.frmregister.AK_TEN.focus();
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
	
		$u=$_POST['AK_MA'];
		
		$p=$_POST['AK_TEN'];
		$k=$_POST['PX_MA'];
		include('dbconect.php');
		$sql="INSERT INTO DANTOC(AK_MA,AK_TEN,PX_MA) values('$u','$p','$k')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=29";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=29";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm ấp/kv</h2>
            <table border='0'>
                <tr>
                    <td>Mã ấp/kv</td>
                    <td><input type = "text" name = "DT_MADT" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Tên ấp/kv</td>
                    <td><input type = "text" name = "DT_TENDT" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Mã xã/phường</td>
                    <td> <select name='PX_MA'>
			             <?php
			             include('dbconect.php');
			                     $qry="select * from XA_PHUONG";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["PX_MA"]."'>".$row["PX_TEN"];
                                }
			             ?>
                        </select></td>
                </tr>
                
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật ấp/kv </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã ấp/kv</td>
    <td width="179" class="chuto">Tên ấp/kv</td> 
    <td width="179" class="chuto">Mã xã/phường</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from ap_kv";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['AK_MA']; ?></td>
    <td align="center"><?php echo $rows['AK_TEN']; ?></td>
     <td align="center"><?php echo $rows['PX_MA']; ?></td>
    <td width="132" align="center"><a href="index.php?suaapkv=<?php echo $rows['AK_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoaapkv=<?php echo $rows['AK_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
