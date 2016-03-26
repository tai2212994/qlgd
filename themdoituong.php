<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.DT_MA.value=="")
		{
			window.alert('bạn chưa nhập mã đối tượng');
			document.frmregister.DT_MA.focus();
			return false;
		}
		if(document.frmregister.DT_TENDT.value=="")
		{
			window.alert('Bạn chưa nhập tên đối tượng');
			document.frmregister.DT_TEN.focus();
			return false;
		}
		if(document.frmregister.DT_DG.value=="")
		{
			window.alert('Bạn chưa nhập diễn giải');
			document.frmregister.DT_DG.focus();
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
	
		$u=$_POST['DT_MA'];
		
		$p=$_POST['DT_TEN'];
		$k=$_POST['DT_DG'];
		include('dbconect.php');
		$sql="INSERT INTO Doituong(DT_MA, DT_TEN,DT_DG) values('$u','$p','$k')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=33";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=33";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form width = "1000" action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm đối tượng</h2>
            <table border='0'>
                <tr>
                    <td width="143" >Mã đối tượng</td>
                    <td width="372"><input type = "text" name = "DT_MA" size="20" id = "textfeild2"></td>
                </tr>
                <tr>
                    <td>Tên đối tượng</td>
                    <td><input type = "text" name = "DT_TEN" size="20" id = "textfeild"></td>
                </tr>
                  <tr>
                    <td>Diễn giải</td>
                    <td><input type = "text" name = "DT_DG" size="60" id = "textfeild"     /></td>
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
    <td width="140" class="chuto">Mã đối tượng</td>
    <td width="179" class="chuto">Tên đối tượng</td> 
    <td width="179" class="chuto">Diễn giải</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from doituong";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['DT_MA']; ?></td>
    <td align="center"><?php echo $rows['DT_TEN']; ?></td>
    <td align="center"><?php echo $rows['DT_DG']; ?></td>
    <td width="132" align="center"><a href="index.php?suadoituong=<?php echo $rows['DT_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoadoituong=<?php echo $rows['DT_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
