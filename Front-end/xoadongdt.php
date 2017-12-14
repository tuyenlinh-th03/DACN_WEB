<?php
include "config.php";
include "autoload.php";
$obj = new Dongdt();
$ma = $_GET["ma"];
$us = $_GET["us"];
$data = $obj->delete($ma);
header("location:timdongdt.php");