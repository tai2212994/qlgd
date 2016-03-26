<?php

    $con=  mysql_connect("localhost","root","") or die ("no connect"); mysql_query("SET NAMES 'utf8'");
    $db= mysql_select_db("qlgd",$con);
    $sql = "insert into DIEM(HS_MA,M_MA,LAN, LD_MA,HOCKY, NAMHOC,DIEM) values 
    ('" . $_POST["HS_MA"] . "','" .$_POST["M_MA"] ."','" .$_POST["LAN"]. "','" .$_POST["LD_MA"]."','".$_POST["HOCKY"]. "','".$_POST["NAMHOC"]."','".$_POST["DIEM"]. "')";
    $result = mysql_query($sql, $con)
    or die ("Could not insert into database");
	    if ($result)
                {
                    echo "<br/>Thêm thông tin thành công.";
                }
                else
                {
                    echo "<br/>Không thêm được thông tin.";
				}
				?>