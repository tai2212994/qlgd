<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript"> 
function thoat()
{
	window.location="index.php";
}
</script>
<?php
if(isset($_POST['btnregister']))
{
		$u=$_POST['TK_MA'];
		$p=$_POST['txtpass'];
		include('dbconect.php');
		$sql="INSERT INTO taikhoan(TK_MA,MATKHAU,quyen) 			values('$u','$p',0)";
			$result=mysql_query($sql);
			if($result)
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã đăng kí thành công');
					window.location="index.php?top=42";
                </script>
                <?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
<form action="" method="post" name="frmregister"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="221" border="0">
  <tr>
    <td height="31" colspan="2" bgcolor="#ffFF"><p class="dangky"><b>THÀNH VIÊN</b></p></td>
    </tr>
 
  <tr>
    <td height="56" colspan="2"><b><font color="#0099FF" > Thông tin tài khoản</font></b><img src="anh/chuan.jpg"></td>
     
    </tr>
  <tr>
    <td width="107" height="50">Username</td>
    <td width="530" height="50"><select name='TK_MA'>
			             <?php
			           
                          include('dbconect.php');
			                     $qry="select * from hocsinh hs left join taikhoan tk on hs.hs_ma = tk.TK_ma where tk.TK_MA is null";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["HS_MA"]."'>".$row["HS_MA"];
                                }
			             ?>
                        </select></td>
  </tr>
  

  <tr>
    <td height="46">Password</td>
    <script>
function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 8; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

function changeText(){
	var p = makeid();
	document.getElementById('txtpass').value = p;
}
</script> 
<td> <input id= 'txtpass' name = 'txtpass'/p>
 </td>
  </tr>
  <tr>
    <td height="26" colspan="2"><input type="submit" name="btnregister"  value="Thêm tài khoản" >
   
	  
      <input type="button" name="btnreset" value="Thoát" onClick="thoat();"  />
      <input type = 'button' value="lấy pass" onclick = "changeText()" /></td>
  </tr>
  </table>
  </div>
</form>
