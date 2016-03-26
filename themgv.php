<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.GV_MA.value=="")
		{
			window.alert('bạn chưa nhập mã giáo viên');
			document.frmregister.GV_MA.focus();
			return false;
		}
		if(document.frmregister.GV_HOTEN.value=="")
		{
			window.alert('Bạn chưa nhập tên giáo viên');
			document.frmregister.GV_HOTEN.focus();
			return false;
		}
			if(document.frmregister.GV_SDT.value=="")
		{
			window.alert('Bạn chưa nhập sdt giáo viên');
			document.frmregister.GV_SDT.focus();
			return false;
		}
			if(document.frmregister.GV_EMAIL.value=="")
		{
			window.alert('Bạn chưa nhập email của giáo viên');
			document.frmregister.GV_EMAIL.focus();
			return false;
		}
			if(document.frmregister.GV_CMND.value=="")
		{
			window.alert('Bạn chưa nhập số cmnd');
			document.frmregister.GV_CMND.focus();
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
	
		$u=$_POST['GV_MA'];
		$p=$_POST['GV_HOTEN'];
		$k=$_POST['GV_NGAYSINH'];
		$h=$_POST['GV_GIOITINH'];
		$m=$_POST['GV_CMND'];
		$n=$_POST['GV_SDT'];
		$o=$_POST['GV_EMAIL'];
		$a=$_POST['DT_MADT'];
		$b=$_POST['TG_MA'];
		$c=$_POST['AK_MA'];
		$d=$_POST['BM_MA'];
		$e=$_POST['TT_MA'];
		include('dbconect.php');
		$sql="INSERT INTO GIAOVIEN(GV_MA, GV_HOTEN, GV_NGAYSINH, GV_GIOITINH, GV_CMND, GV_SDT,GV_EMAIL,DT_MADT,TG_MA, AK_MA, BM_MA,TT_MA) values('$u','$p','$k','$h','$m','$n','$o','$a','$b','$c','$d','$e')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=43";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=43";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm giáo viên</h2>
          <table border='0'>
                <tr>
                    <td>Mã Giáo Viên</td>
                    <td><input type = "text" name = "GV_MA" size="20"id="textfield"></td>
                </tr>
                <tr>
                    <td>Họ tên</td>
                    <td><input type = "text" name = "GV_HOTEN" size="20"id="textfield"></td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type = "date" name = "GV_NGAYSINH" size="20"id="textfield"></td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td><input type="radio" name="GV_GIOITINH" checked value="Nam">Nam
			             &nbsp;
			         <input type="radio" name="GV_GIOITINH" value="Nu">Nữ
		            </td>
                <tr>
                    <td>CMND</td>
                    <td><input type = "text" name = "GV_CMND" size="20"id="textfield"></td>
                </tr>
                <tr>
                    <td>SDT</td>
                    <td><input type = "text" name = "GV_SDT" size="20"id="textfield"></td>
                </tr>
                 <tr>
                    <td>Email</td>
                    <td><input type = "text" name = "GV_EMAIL" size="20"id="textfield"></td>
                </tr>
           
               <tr>
                    <td>Dân Tộc</td>
                    <td>
                        <select name='DT_MADT'>
			             <?php
			           
                           include("dbconect.php");
									 mysql_query("SET NAMES 'utf8'");
			                     $db = mysql_select_db("qlgd") 
                                     or die ("Could not select database");
			                     $qry="select * from dantoc";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["DT_MADT"]."'>".$row["DT_TENDT"];
                                }
			             ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tôn giáo</td>
                    <td>
                        <select name='TG_MA'>
			             <?php
			              include("dbconect.php");
									 mysql_query("SET NAMES 'utf8'");
			                     $db = mysql_select_db("qlgd") 
                                     or die ("Could not select database");
			                     $qry="select * from tongiao";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["TG_MA"]."'>".$row["TG_TEN"];
                                }
			             ?>
                        </select>
                    </td>
                </tr>
                
                    <tr>
                    <td>Khu vực</td>
                    <td>
                        <select name='AK_MA'>
			             <?php
			           include("dbconect.php");
									 mysql_query("SET NAMES 'utf8'");
			                     $db = mysql_select_db("qlgd") 
                                     or die ("Could not select database");
			                     $qry="select * from AP_KV";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["AK_MA"]."'>".$row["AK_TEN"];
                                }
			             ?>
                        </select>
                    </td>
                </tr>
                  <tr>
                    <td>Bộ Môn</td>
                    <td>
                    <select name='BM_MA'>
                      <?php
			              include("dbconect.php");
			                     $db = mysql_select_db("qlgd") 
                                     or die ("Could not select database");
			                     $qry="select * from bo_mon";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["BM_MA"]."'>".$row["BM_TEN"];
                                }
			          ?>
                    </select>
                    </td>
              </tr>
               <tr>
                    <td>Trạng thái</td>
                    <td>
                    <select name='TT_MA'>
                      <?php
			              include("dbconect.php");
			                     $db = mysql_select_db("qlgd") 
                                     or die ("Could not select database");
			                     $qry="select * from trangthai";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["TT_MA"]."'>".$row["TT_TEN"];
                                }
			          ?>
                    </select>
                    </td>
              </tr>
            </table>
            <br>
            <input type = "submit" name="btnregister" value = "Thêm">
            <input type = "reset" value="Reset">
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  /></form>
      <hr color=”FF0000″ /> <form>
			<h2>Cập nhật Giáo viên </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã Giáo viên</td>
    <td width="179" class="chuto">Tên Giáo viên</td>  
  </tr>
   <?php
	include ('dbconect.php');
	$sql="select * from GIAOVIEN";
	$result=mysql_query($sql);
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['GV_MA']; ?></td>
    <td align="center"><?php echo $rows['GV_HOTEN']; ?></td>
    <td width="132" align="center"><a href="index.php?suagv=<?php echo $rows['GV_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoa=<?php echo $rows['GV_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>

</table>

        </form>

	
