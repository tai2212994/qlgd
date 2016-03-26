<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.QH_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã quận huyện');
			document.frmregister.QH_MA.focus();
			return false;
		}
		if(document.frmregister.QH_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên quận huyện');
			document.frmregister.QH_TEN.focus();
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
	
		$u=$_POST['QH_MA'];
		
		$p=$_POST['QH_TEN'];
		$m=$_POST['TTP_MA'];
		include('dbconect.php');
		$sql="INSERT INTO QUAN_HUYEN(QH_MA,QH_TEN,TTP_MA) values('$u','$p','$m')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=31";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=31";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
           <font color="#0099FF"><h2>Thêm quận huyện</h2>
            <table border='0'>
                 <tr>
                    <td>Mã quận huyện</td>
                    <td><input type = "text" name = "QH_MA" size="20" id= textfield></td>
                </tr>
                <tr>
                    <td>Tên quận huyện</td>
                    <td><input type = "text" name = "QH_TEN" size="20"id= textfield></td>
                </tr>
				 <tr>
                    <td>Mã tỉnh/ tp</td>
                    <td>
                        <select name='TTP_MA'>
			             <?php
			             include('dbconect.php');
			                     $qry="select * from TINH_TP";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["TTP_MA"]."'>".$row["TTP_TEN"];
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
          <form>
			<h2>Cập nhật quận huyện</h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã quận huyện</td>
    <td width="179" class="chuto">Tên quận huyện </td>
    <td width="179" class="chuto">Mã tỉnh/ tp </td>
  </tr>
   <?php 
	include ('dbconect.php');
	$sql="select * from QUAN_HUYEN";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['QH_MA']; ?></td>
    <td align="center"><?php echo $rows['QH_TEN']; ?></td>
    <td align="center"><?php echo $rows['TTP_MA']; ?></td>
    <td width="135" align="center"><a href="index.php?suaqh=<?php echo $rows['QH_MA']; ?>">Sửa</a></td>
    <td width="136" align="center"><a href="index.php?xoaqh=<?php echo $rows['QH_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
