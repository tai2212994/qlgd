<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.BM_MA.value=="")
		{
			window.alert('bạn chưa nhập mã bộ môn');
			document.frmregister.BM_MA.focus();
			return false;
		}
		if(document.frmregister.BM_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên bộ môn');
			document.frmregister.BM_TEN.focus();
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
	
		$u=$_POST['BM_MA'];
		$p=$_POST['BM_TEN'];
		$k=$_POST['TCM_MA'];
		include('dbconect.php');
		$sql="INSERT INTO BO_MON(BM_MA,BM_TEN,TCM_MA) values('$u','$p','$k')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=36";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=36";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm bộ môn</h2>
            <table border='0'>
                <tr>
                    <td>Mã bộ môn</td>
                    <td><input type = "text" name = "BM_MA" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Tên bộ môn</td>
                    <td><input type = "text" name = "BM_TEN" size="20" id = "textfeild"></td>
                </tr>
                <tr>
                    <td>Mã tổ chuyên môn</td>
                    <td> <select name='TCM_MA'>
			             <?php
			             include('dbconect.php');
			                     $qry="select * from TOCM";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["TCM_MA"]."'>".$row["TCM_TEN"];
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
			<h2>Cập nhật Bộ môn </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã Bộ môn</td>
    <td width="179" class="chuto">Tên Bộ môn</td> 
    <td width="179" class="chuto">Mã Tổ chuyên môn</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from bo_mon";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['BM_MA']; ?></td>
    <td align="center"><?php echo $rows['BM_TEN']; ?></td>
     <td align="center"><?php echo $rows['TCM_MA']; ?></td>
    <td width="132" align="center"><a href="index.php?suabm=<?php echo $rows['BM_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoabm=<?php echo $rows['BM_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
