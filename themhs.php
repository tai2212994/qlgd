<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.HS_MA.value=="")
		{
			window.alert('bạn chưa nhập mã học sinh');
			document.frmregister.HS_MA.focus();
			return false;
		}
		if(document.frmregister.HS_HOTEN.value=="")
		{
			window.alert('Bạn chưa nhập tên học sinh');
			document.frmregister.HS_HOTEN.focus();
			return false;
		}
			if(document.frmregister.HS_SDT.value=="")
		{
			window.alert('Bạn chưa nhập sdt phụ huynh');
			document.frmregister.HS_SDT.focus();
			return false;
		}
			if(document.frmregister.HS_EMAIL.value=="")
		{
			window.alert('Bạn chưa nhập email của phụ huynh');
			document.frmregister.HS_EMAIL.focus();
			return false;
		}
			if(document.frmregister.HS_HTCHA.value=="")
		{
			window.alert('Bạn chưa nhập họ tên cha');
			document.frmregister.HS_HTCHA.focus();
			return false;
		}
			
				if(document.frmregister.HS_HTME.value=="")
		{
			window.alert('Bạn chưa nhập họ tên mẹ');
			document.frmregister.HS_HTME.focus();
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
	
		$u=$_POST['HS_MA'];
		$p=$_POST['HS_HOTEN'];
		$k=$_POST['HS_NGAYSINH'];
		$h=$_POST['HS_GIOITINH'];
		$i=$_POST['HS_HTCHA'];
		$y=$_POST['HS_HTME'];
		$l=$_POST['HS_NNCHA'];
		$z=$_POST['HS_NNME'];
		$m=$_POST['KVUT_MA'];
		$n=$_POST['HS_SDT'];
		$o=$_POST['HS_EMAIL'];
		$a=$_POST['DT_MADT'];
		$b=$_POST['TG_MA'];
		$c=$_POST['AK_MA'];
		$d=$_POST['DT_MA'];
		$e=$_POST['TT_MA'];
		include('dbconect.php');
		$sql="INSERT INTO HOCSINH(HS_MA, HS_HOTEN, HS_NGAYSINH, HS_GIOITINH,HS_HTCHA,HS_HTME, HS_NNCHA,HS_NNME, KVUT_MA, HS_SDT,HS_EMAIL,DT_MADT,TG_MA, AK_MA, DT_MA,TT_MA) values('$u','$p','$k','$h','i','y','l','z','$m','$n','$o','$a','$b','$c','$d','$e')";
			$result=mysql_query($sql);
			if($result)
			{
				
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã thêm thành công');
					window.location="index.php?top=44";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Không thành công');
					window.location="index.php?top=44";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>

	  <form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
        <font color="#0099FF"><h2>Thêm học sinh</h2>
            <table border='0'>
                <tr>
                    <td>Mã học sinh</td>
                    <td><input type = "text" name = "HS_MA" size="20" id="textfield"></td>
                </tr>
                <tr>
                    <td>Họ tên</td>
                    <td><input type = "text" name = "HS_HOTEN" size="20" id="textfield"></td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type = "date" name = "HS_NGAYSINH" size="20" id="textfield"></td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td><input type="radio" name="HS_GIOITINH" checked value="Nam">Nam
			             &nbsp;
			         <input type="radio" name="HS_GIOITINH" value="Nu">Nữ
		            </td>
                <tr>
                    <td>SDT</td>
                    <td><input type = "text" name = "HS_SDT" size="20" id="textfield"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type = "text" name = "HS_EMAIL" size="20" id="textfield"></td>
                </tr>
                 <tr>
                    <td>Họ tên cha</td>
                    <td><input type = "text" name = "HS_HTCHA" size="20" id="textfield"> </td>
                </tr>
                   <tr>
                    <td>Họ tên mẹ</td>
                    <td><input type = "text" name = "HS_HTME" size="20" id="textfield"></td>
                </tr>
				   <tr>
                    <td>Nghề nghiệp cha</td>
                    <td><input type = "text" name = "HS_NNCHA" size="20" id="textfield"></td>
                </tr>
				   <tr>
                    <td>Nghề ngiệp mẹ</td>
                    <td><input type = "text" name = "HS_NNME" size="20" id="textfield"></td>
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
                    <td>Đối tượng</td>
                    <td>
                    <select name='DT_MA'>
                      <?php
			       include("dbconect.php");
			                     $db = mysql_select_db("qlgd") 
                                     or die ("Could not select database");
			                     $qry="select * from DOITUONG";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["DT_MA"]."'>".$row["DT_TEN"];
                                }
			          ?>
                    </select>
                    </td>
              </tr>
			           <tr>
                    <td>Khu vực ưu tiên</td>
                    <td>
                    <select name='KVUT_MA'>
                      <?php
					  include("dbconect.php");
			                     $db = mysql_select_db("qlgd") 
                                     or die ("Could not select database");
			                     $qry="select * from KV_UT";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["KVUT_MA"]."'>".$row["KVUT_TEN"];
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
			<h2>Cập nhật Học sinh </h2>
			<table width="600" border="1" class="tanle">
			  <tr>
    <td width="140" class="chuto">Mã Học sinh</td>
    <td width="179" class="chuto">Tên Học sinh</td>  
  </tr>
   <?php

include('dbconect.php');
if(!isset($_GET['page']))
{
	$_GET['page']=1;
}
$start=($_GET['page']-1)*10;
 $qry="select * from hocsinh limit $start,10";
 $result = mysql_query($qry);

  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['HS_MA']; ?></td>
    <td align="center"><?php echo $rows['HS_HOTEN']; ?></td>
    <td width="132" align="center"><a href="index.php?suahs=<?php echo $rows['HS_MA']; ?>">Sửa</a></td>
    <td width="131" align="center"><a href="index.php?xoa=<?php echo $rows['HS_MA']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
		$sql_qry="select * from hocsinh";
		$result = mysql_query($sql_qry);
		$count= mysql_num_rows($result);
		$tongsotrang=floor($count/10)+1;
		if($_GET['page']>1)
		{
			echo '<a href="index.php?page='.($_GET['page']-1)."><<Back</a>";
		}
		for($i=1;$i<=$tongsotrang;$i++)
		{
		if($i==$_GET['page'])
		{
			echo 'Trang'.$i;
			}	else echo '<a href="index.php?page='.$i.'"><<'.$i.'</a>';
			
		}
		if($_GET['page']<$tongsotrang)
		{
			echo '<a href="index.php?page='.($_GET['page']+1)."><<Next</a>";


		}
  ?>

 
</table>

        </form>

	
