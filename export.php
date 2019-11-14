<?php
session_start();
ob_start();
include("connect.php");
$s_username = $_SESSION['name'];
$get = "SELECT * FROM user WHERE emailId ="."'".$s_username."'";
$display = mysqli_query($connect,$get);
$result = mysqli_fetch_assoc($display);
if($s_username==true){
    
}
else
{
    header('location:index.php');
}
$select = "SELECT * FROM projector_room WHERE filename='".$_GET['access_file']."'";
$select_query = mysqli_query($connect,$select);

$select2 = "SELECT * FROM projector_room WHERE filename='".$_GET['access_file']."' ORDER BY buss_act";
$select_query2 = mysqli_query($connect,$select2);

$abbr = "SELECT * FROM abbr ORDER BY no";
$abbr_query = mysqli_query($connect,$abbr);




require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

$tableHead = [
    'font'=>[
        'color'=>[
            'rgb'=>'FFFFFF'
        ],
    ],
    'fill'=>[
        'fillType'=>Fill::FILL_SOLID,
        'startColor'=>[
            'rgb'=>'538DD5'
        ]
    ],
];
$tableDark = [
    'font'=>[
        'color'=>[
            'rgb'=>'FFFFFF'
        ],
    ],
    'fill'=>[
        'fillType'=>Fill::FILL_SOLID,
        'startColor'=>[
            'rgb'=>'366092'
        ]
    ],
];
$tableGreen = [
    'font'=>[
        'color'=>[
            'rgb'=>'FFFFFF'
        ],
    ],
    'fill'=>[
        'fillType'=>Fill::FILL_SOLID,
        'startColor'=>[
            'rgb'=>'76933C'
        ]
    ],
];

$spreadsheet = new SpreadSheet();
$spreadsheet->createSheet(0);
$spreadsheet->setActiveSheetIndex(0);
$spreadsheet->getActiveSheet()->setTitle('Summary');
$sheet = $spreadsheet->getActiveSheet();
$sheet->getStyle('A1:E1')->getFont()->setSize(12);
$sheet->getStyle('A1:E1')->getFont()->setBold(true);
$sheet->getStyle('A1:E1')->applyFromArray($tableHead);
$sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$sheet->getColumnDimension('A')->setWidth(6);
$sheet->getColumnDimension('B')->setWidth(16);
$sheet->getColumnDimension('C')->setWidth(13);
$sheet->getColumnDimension('D')->setWidth(16);
$sheet->getColumnDimension('E')->setWidth(12);

$sheet->setCellValue('A1','S.No')
    ->setCellValue('B1','Particulars')
    ->setCellValue('C1','Max Marks')
    ->setCellValue('D1','Marks Obtained')
    ->setCellValue('E1','Percenage');
 
    $a=0;
    $b=0;
    $count=1;
    while($select_fetch = mysqli_fetch_assoc($select_query)){
        $a = $a+$select_fetch['max_marks'];
        $b = $b+$select_fetch['marks_obt'];
        $count = $count+1;
    }
    $c=$b/$a;
    $c=$c*100;
    $sheet->setCellValue('A2','1');
    $sheet->setCellValue('B2','Projection Room');
    $sheet->setCellValue('C2',$a);
    $sheet->setCellValue('D2',$b);
    $sheet->setCellValue('E2',round($c,2));

    $stotal=3;
    $svalue = $stotal-1;
    $sheet->setCellValue('B'.$stotal,'Grand Total');
    $sheet->setCellValue('C'.$stotal,'=SUM(C2:C'.$svalue.')');
    $sheet->setCellValue('D'.$stotal,'=SUM(D2:D'.$svalue.')');
    $sheet->setCellValue('E'.$stotal,'=ROUND(((D'.$stotal.'/C'.$stotal.')*100),2)');

    $sheet->getStyle('A1:E'.$stotal)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);




$spreadsheet->createSheet(1);
$spreadsheet->setActiveSheetIndex(1);
$spreadsheet->getActiveSheet()->setTitle('1. Projection Room');
$sheet2 = $spreadsheet->getActiveSheet();
$sheet2->getStyle('A1:J2')->getFont()->setName('Garamond')->setSize(11);
$sheet2->getStyle('A1:J2')->getFont()->setBold(true);
$sheet2->getStyle('A1:J18')->getAlignment()->setWrapText(true);
$sheet2->getStyle('A1:E2')->applyFromArray($tableDark);
$sheet2->getStyle('H1:I2')->applyFromArray($tableGreen);
$sheet2->getStyle('F1:F2')->applyFromArray($tableGreen);
$sheet2->getStyle('G1:G2')->applyFromArray($tableDark);
$sheet2->getStyle('J1:J2')->applyFromArray($tableDark);
$sheet2->getStyle('A1:J2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$sheet2->getStyle('A1:J18')->getAlignment()->setVertical(Alignment::VERTICAL_TOP);

$sheet2->getColumnDimension('A')->setWidth(9);
$sheet2->getRowDimension('2')->setRowHeight(31);
$sheet2->getColumnDimension('B')->setWidth(16);
$sheet2->getColumnDimension('C')->setWidth(11);
$sheet2->getColumnDimension('D')->setWidth(9);
$sheet2->getColumnDimension('E')->setWidth(36);
$sheet2->getColumnDimension('F')->setWidth(21);
$sheet2->getColumnDimension('G')->setWidth(21);
$sheet2->getColumnDimension('H')->setWidth(10);
$sheet2->getColumnDimension('I')->setWidth(10);
$sheet2->getColumnDimension('J')->setWidth(36);
$sheet2->freezePane('F3');

$sheet2->mergeCells("A1:E1");
$sheet2->setCellValue('A1','Process and Risk');
$sheet2->setCellValue('A2','Control Number');
$row1 = 1;
$alphabet = range('A', 'Z');
while($abbr_fetch = mysqli_fetch_assoc($abbr_query)){
    $value=$alphabet[$row1].'2';
    $sheet2->setCellValue($value,$abbr_fetch['name']);
    $row1=$row1+1;
}
$sno=3;
$no = 0;
while($select_fetch2 = mysqli_fetch_assoc($select_query2)){
    $no = $sno-2;
    $sheet2->setCellValue('A'.$sno,$no);
    $sheet2->setCellValue('B'.$sno,$select_fetch2['buss_act']);
    $sheet2->setCellValue('C'.$sno,$select_fetch2['sub_act']);
    $sheet2->setCellValue('D'.$sno,$select_fetch2['area']);
    $sheet2->setCellValue('E'.$sno,$select_fetch2['pts_check']);
    $sheet2->setCellValue('F'.$sno,$select_fetch2['crtl_obj']);
    $sheet2->setCellValue('G'.$sno,$select_fetch2['act_desc']);
    $sheet2->setCellValue('H'.$sno,$select_fetch2['max_marks']);
    $sheet2->setCellValue('I'.$sno,$select_fetch2['marks_obt']);
    $sheet2->setCellValue('J'.$sno,$select_fetch2['remark']);
    $sno= $sno+1;
}
$last = $no+2;
$last1 = $last+1;
$sheet2->getStyle('A1:J'.$last)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

$sheet2->setCellValue('E'.$last1,'Grand Total');
$sheet2->setCellValue('H'.$last1,$a);
$sheet2->setCellValue('I'.$last1,$b);
$sheet2->getStyle('E'.$last1)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet2->getStyle('H'.$last1)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$sheet2->getStyle('I'.$last1)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);



$spreadsheet->setActiveSheetIndex(0);



$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$_GET['access_file'].'.xlsx"');
$writer->save("php://output");
//header('location:user_result.php');

?>