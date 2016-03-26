<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.TG_MA.value=="")
		{
			window.alert('Bạn chưa nhập mã tôn giáo');
			document.frmregister.TG_MA.focus();
			return false;
		}
		if(document.frmregister.TG_TEN.value=="")
		{
			window.alert('Bạn chưa nhập tên tôn giáo');
			document.frmregister.TG_TEN.focus();
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
	
		$u=$_POST['TG_MA'];
		
		$p=$_POST['TG_TEN'];
		include('dbconect.php');
		$sql="INSERT INTO TONGIAO(TG_MA,TG_TEN) values('$u','$p')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=28";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=28";
                </script>
			<?php
			}
		else
			echo' Bạn ko thêm được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
           <font color="#0099FF"><h2>Thêm tôn giáo
            </h2>
           <table border='0'>
              <tr>
                    <td>Mã tôn giáo</td>
                    <td><input type = "text" name = "TG_MA" size="20"id = "textfeild" ></td>
                </tr>
                <tr>
                    <td>Tên tôn giáo</td>
                    <td><input type = "text" name = "TG_TEN" size="20" id = "textfeild"></td>
                </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
              <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /> </form>
              <hr color=”FF0000″ />
          <form>
			<h2>Cập nhật tôn giáo</h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã tôn giáo</td>
    <td width="179" class="chuto">Tên tôn giáo </td>
    
  </tr>
  <tr>
	  
      </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from tongiao";
	$result=mysql_query($sql);

  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['TG_MA']; ?></td>
    <td align="center"><?php echo $rows['TG_TEN']; ?></td>
    <td width="135" align="center"><a href="index.php?suatg=<?php echo $rows['TG_MA']; ?>">Sửa</a></td>
    <td width="136" align="center"><a href="index.php?xoatg=<?php echo $rows['TG_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
