<html>
    <head>
        <title>Thêm điểm học sinh</title>
        <meta charset="utf-8"/>
    </head>
   
<body>
 <form method="post" action= "chendiem.php">
            <br>
            <table border='0'>
                <tr>
                    <td> Mã học sinh </td>
                    <td>
                    <select name='HS_MA'>
                      <?php
			              		
						  		include ('dbconnect.php');
						         $qry="select * from HOCSINH";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["HS_MA"]."'>".$row["HS_MA"];
                                }
			          ?>
                    </select>
                    </td>
              </tr>
			   <tr>
                    <td>Môn học</td>
                    <td>
                    <select name='M_MA'>
                      <?php
			              
                   				include ('dbconnect.php');
			                     $qry="select * from MON";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["M_MA"]."'>".$row["M_MA"];
                                }
			          ?>
                    </select>
                    </td>
              </tr>
			   <tr>
                    <td>Lần</td>
                    <td>
                        <select name='LAN'>
			             <?php
			           
                           include ('dbconnect.php');
			                     $qry="select * from LAN";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["LAN"]."'>".$row["LAN"];
                                }
			             ?>
                        </select>
                    </td>
                </tr>
               <tr>
                    <td>Loại điểm</td>
                    <td>
                        <select name='LD_MA'>
			             <?php
			           
                           include ('dbconnect.php');
			                     $qry="select * from LOAIDIEM";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["LD_MA"]."'>".$row["LD_MA"];
                                }
			             ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Học kỳ</td>
                    <td>
                        <select name='HOCKY'>
			             <?php
			              
                           include ('dbconnect.php');
			                     $qry="select * from HOCKY";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["HOCKY"]."'>".$row["HOCKY"];
                                }
			             ?>
                        </select>
                    </td>
                </tr>
                  <tr>
                    <td>Năm học</td>
                    <td>
                    <select name='NAMHOC'>
                      <?php
			              
                           include ('dbconnect.php');
			                     $qry="select * from NAMHOC";
			                     $result = mysql_query($qry);
			                     while ($row = mysql_fetch_array($result))
			                    {
                                    echo "<option value='".$row["NAMHOC"]."'>".$row["NAMHOC"];
                                }
			          ?>
                    </select>
                    </td>
              </tr>
			  <tr>
                    <td>Điểm</td>
                    <td><input type = "text" name = "DIEM" size="20"</td>
                </tr>
            </table>
            <br>
            <input type = "submit" value = "Thêm">
            <input type = "reset" value="Reset"><br>
        </form>

</body>
</html>
