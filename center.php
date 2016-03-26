<title></title>
<?php
$left = isset($_GET["left"])?$_GET["left"]:"";

	switch($left) 
	{
		case 2:
			include "dangnhap.php";
			break;
		case 3:
			include "thongtinthanhvien.php";
			break;
		case 4:
			include "thoat.php";
			break;
		case 5:
			include "phanquyen.php";
			break;
		case 6:
			include "formlylichgv.php";
			break;
				
	}	
	$top = isset($_GET["top"])?$_GET["top"]:"";
	switch($top) 
	{
		case 1:
			include "chitiethanoi.php";
			break;
		case 2:
			include "chitiethanoi.php";
			break;
		case 3:
			include "chitiethanoi.php";
			break;
		case 4:
			include "chitiethanoi.php";
			break;
		case 5:
			include "chitiethanoi.php";
			break;
		case 6:
			include "chitiethanoi.php";
			break;
		case 7:
			include "thongtintourdulich.php";
			break;
		case 8:
			include "thongtinnhahang.php";
			break;
		case 9:
			include "thongtinkhachsan.php";
			break;
		case 10:
			include "tomtattainguyendulich.php";
			break;
		case 11:
			include "tomtattainguyendulich.php";
			break;	
		case 12:
			include "tomtathoatdong.php";
			break;
		case 13:
			include "tomtathoatdong.php";
			break;
		case 14:
			include "tomtattainguyendulich.php";
			break;
		case 15:
			include "tomtattainguyendulich.php";
			break;
		case 16:
			include "tomtattainguyendulich.php";
			break;
		case 17:
			include "cnchitiethoatdong.php";
			break;
		case 18:
			include "cntourdulich.php";
			break;
		case 19:
			include "capnhatkhachsan.php";
			break;
		case 20:
			include "capnhattainguyen.php";
			break;
		case 21:
			include "themdiem.php";
			break;
		case 22:
			include "cnlhdulich.php";
			break;
		case 23:
			include ('themdantoc.php');
			break;
		case 24:
			include ('capnhatloaitourdulich.php');
			break;
		case 25:
			include ('capnhatnhahang.php');
			break;
		case 26:
			include ('capnhathuongdanvien.php');
			break;
		case 27:
			include ('capnhatloainhahang.php');
			break;
		case 28:
			include ('themtongiao.php');
			break;
		case 29:
			include ('themapkv.php');
			break;
		case 30:
			include ('themxp.php');
			break;
		case 31:
			include ('themqh.php');
			break;
		case 32:
			include ('themttp.php');
			break;
		case 33:
			include ('themdoituong.php');
			break;
		case 34:
			include ('themkvut.php');
			break;
		case 35:
			include ('themcv.php');
			break;
	   case 36:
			include ('thembm.php');
			break;
		case 37:
			include ('themmon.php');
			break;
		case 38:
			include ('themnamhoc.php');
			break;
		case 39:
			include ('themhv.php');
			break;
		case 40:
			include ('captkgv.php');
			break;
		case 41:
			include ('themcm.php');
			break;
		case 42:
			include ('captkhs.php');
			break;
		case 43:
			include ('themgv.php');
			break;
		case 44:
			include ('themhs.php');
			break;
		case 45:
			include ('dshscn.php');
			break;
	}
	if(isset($_GET['sua']))
		include ('suadt.php');
    if(isset($_GET['suatg']))
		include ('suatg.php');
	if(isset($_GET['xoatg']))
		include ('xoatg.php');
	if(isset($_GET['suaapkv']))
		include ('suaapkv.php');
	if(isset($_GET['xoaapkv']))
		include ('xoaapkv.php');
	if(isset($_GET['suaxp']))
		include ('suaxp.php');
	if(isset($_GET['xoaxp']))
		include ('xoaxp.php');
	if(isset($_GET['suaqh']))
		include ('suaqh.php');
	if(isset($_GET['xoaqh']))
		include ('xoaqh.php');
	if(isset($_GET['xoa']))
		include ('xoadt.php');
	if(isset($_GET['suattp']))
		include ('suattp.php');
	if(isset($_GET['xoattp']))
		include ('xoattp.php');
	if(isset($_GET['suadoituong']))
		include ('suadoituong.php');
	if(isset($_GET['xoadoituong']))
		include ('xoadoituong.php');
	if(isset($_GET['suakvut']))
		include ('suakvut.php');
	if(isset($_GET['xoakvut']))
		include ('xoakvut.php');
	if(isset($_GET['suacv']))
		include ('suacv.php');
	if(isset($_GET['xoacv']))
		include ('xoacv.php');
	if(isset($_GET['suabm']))
		include ('suabm.php');
	if(isset($_GET['xoabm']))
		include ('xoabm.php');
	if(isset($_GET['suamon']))
		include ('suamon.php');
	if(isset($_GET['xoamon']))
		include ('xoamon.php');
	if(isset($_GET['xoanamhoc']))
		include ('xoanamhoc.php');
	if(isset($_GET['suahv']))
		include ('suahv.php');
	if(isset($_GET['xoahv']))
		include ('xoahv.php');
	if(isset($_GET['suacm']))
		include ('suacm.php');
	if(isset($_GET['xoacm']))
		include ('xoacm.php');
	if(isset($_GET['suahs']))
		include ('suahs.php');
	if(isset($_GET['suagv']))
		include ('suagv.php');
			
	if((!isset($_GET['left'])) & (!isset($_GET['nhahang'])) & (!isset($_GET['sua'])) & (!isset($_GET['suatg'])) & (!isset($_GET['xoatg'])) & (!isset($_GET['suaapkv'])) & (!isset($_GET['xoaapkv'])) & (!isset($_GET['suaxp'])) & (!isset($_GET['xoa'])) & (!isset($_GET['xoaxp'])) & (!isset($_GET['suaqh'])) & (!isset($_GET['xoaqh'])) & (!isset($_GET['suattp'])) & (!isset($_GET['xoattp'])) & (!isset($_GET['suadoituong'])) & (!isset($_GET['xoadoituong'])) & (!isset($_GET['suakvut'])) & (!isset($_GET['xoakvut'])) & (!isset($_GET['suacv'])) &(!isset($_GET['xoacv']))&(!isset($_GET['suabm']))& (!isset($_GET['xoabm']))&(!isset($_GET['suamon']))&(!isset($_GET['xoamon'])) &(!isset($_GET['xoanamhoc']))&(!isset($_GET['suahv']))&(!isset($_GET['suahs']))&(!isset($_GET['suagv']))&(!isset($_GET['xoahv']))&(!isset($_GET['suacm']))&  (!isset($_GET['xoacm']))&(!isset($_GET['top'])) & (!isset($_GET['left'])) & (!isset($_GET['thamgiatour'])) & (!isset($_GET['suahoatdong'])) )
		{
			include "gioithieu.php";	
		}	
?>
