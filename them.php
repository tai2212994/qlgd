<link rel="stylesheet" type="text/css" href="css/style.css"
<form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="400" height="197" border="0">
  <tr>
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>Thêm Dân Tộc</b></p></td>
    </tr>
  
  <tr>
    <td width="138">Mã Dân Tộc</td>
  <td><input type="text" name="txtuser" size="30" onblur="kiemtrauser(this.value)"></td> </tr>
  <tr>
    <td rowspan="2">Tên Dân Tộc</font></td>
    <td height="24"><input type="text" name="txtuser" size="30" onblur="kiemtrauser(this.value)"></td>
  </tr>
 
  
  
  </tr>
  <tr>
    <td align = "center" colspan="2">
      <input type="submit" name="btnregister"  value="Thêm" />
      <input type="submit" name="btnreset" value="Thoát" onclick="thoat();" /></td>
    </tr>
  </table>
  </div>
</form>
