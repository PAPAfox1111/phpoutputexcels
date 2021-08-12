<?php
session_start();
/********************************************/
//              ! IMPORTANT !               //
require 'vendor/autoload.php';
//  NOTE need enable all function when used //
//load phpspreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//call xlsx writer class to make an xlsx file
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
//use IOFactory when used
use PhpOffice\PhpSpreadsheet\IOFactory;
/********************************************/

if(isset($_POST['submit'])){
	$filetype = ['xls', 'csv', 'xlsx'];
	$filename = $_FILES['filename']['name'];
	$check = explode(".", $filename);
	$file_ext = end($check);

	if(in_array($file_ext, $filetype)){

	}
	else{
		$_SESSION['status'] = "UnKown File";
		header("Location: db_data_xlsx.php");
		exit(0);
	}
}




?>