<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.PX_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã xã/phường');
			document.frmregister.PX_MA.focus();
			return false;
		}
		if(document.frmregister.PX_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên xã/phường');
			document.frmregister.PX_TEN.focus();
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
		$u=$_POST['PX_MA'];
		$p=$_POST['PX_TEN'];
		$m=$_POST['QH_MA'];
		include('dbconect.php');
		$sql="INSERT INTO XA_PHUONG(PX_MA,PX_TEN,QH_MA) values('$u','$p','$m')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=30";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=30";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
           <font color="#0099FF"><h2>Thêm Xã/phường</h2>
            <table border='0'>
                 <tr>
                    <td>Mã xã/phường</td>
                    <td><input type = "text" name = "PX_MA" size="20" id= textfield></td>
                </tr>
                <tr>
                    <td>Tên xã/phường</td>
                    <td><input type = "text" name = "PX_TEN" size="20"id= textfield></td>
                </tr>
				 <tr>
                    <td>Mã quận huyện</td>
                    <td>
                        <select name='QH_MA'>
			             <?php
			             include('dbconect.php');
			                     $qry="select * from QUAN_HUYEN";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["QH_MA"]."'>".$row["QH_TEN"];
                                }
			             ?>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
            <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  />
              <br> </form>
              <hr color=”FF0000″ />
          <form><h2>Cập nhật Xã/phường</h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã xã/phường</td>
    <td width="179" class="chuto">Tên xã/phường </td>
    <td width="179" class="chuto">Mã quận huyện </td>
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from XA_PHUONG";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['PX_MA']; ?></td>
    <td align="center"><?php echo $rows['PX_TEN']; ?></td>
    <td align="center"><?php echo $rows['QH_MA']; ?></td>
    <td width="135" align="center"><a href="index.php?suaxp=<?php echo $rows['PX_MA']; ?>">Sửa</a></td>
    <td width="136" align="center"><a href="index.php?xoaxp=<?php echo $rows['PX_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
