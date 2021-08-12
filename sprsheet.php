<?php

//call autoload
require 'vendor/autoload.php';

//load phpspreadsheet class using namespaces

use PhpOffice\PhpSpreadsheet\Spreadsheet;

//call xlsx writer class to make an xlsx file
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// new object of spreadsheet
$spreadsheet = new Spreadsheet();
//get current active sheet (first sheet)
$sheet = $spreadsheet->getActiveSheet();

//set the alue of cell a1 to "Hello word!"
$sheet->setCellValue('A1', 'Hello World !');

//mmake an xlsxwriter object using above 
$writer = new Xlsx($spreadsheet);
//write the file in current directory
$writer->save('hello world.xlsx');

/**********Download the file in broser to local**********/
echo "<meta http-equiv='refresh' content='0;url=hello+world.xlsx' />";