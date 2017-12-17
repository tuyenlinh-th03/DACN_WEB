<?php
include "config.php";
include "autoload.php";
$obj = new Loaidt();
$ob = new Dongdt();
$ma = $_GET["ma"];
$r= $ob->getLoai($ma);
	if($r!=Array())
	{
		echo "không thể xóa loại điện thoại này";
		echo "Có ".count($r)."dòng điện thoại trong loại điện thoại này";
	}
	else
	{
		$data = $obj->delete($ma);
		header("location:timloai.php");
	}


