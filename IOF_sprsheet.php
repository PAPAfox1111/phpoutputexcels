<?php

//call autoload
require 'vendor/autoload.php';

/********************************************/
//              ! IMPORTANT !              //
//  NOTE need enable all function when used//
//load phpspreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//call xlsx writer class to make an xlsx file
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
//use IOFactory when used
use PhpOffice\PhpSpreadsheet\IOFactory;
/********************************************/

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


//set the header first, so the result will be treated as an xlsx file
header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//tanslate header php -> xlsx
header('Content-Disposition: attachment; filename="result.xlsx"');

/**********Create IOFactory object**********/
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
//save into php output
$writer->save('php://output');

