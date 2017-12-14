<?php
include "config.php";
include "autoload.php";
$obj = new Dt();
$us = $_GET["us"];
$ma = $_GET["ma"];
$data = $obj->delete($ma);
header("location:timdt.php");