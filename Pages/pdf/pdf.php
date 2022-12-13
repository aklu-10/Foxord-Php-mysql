<?php

include_once('./fpdf185/fpdf.php');

$conn=mysqli_connect("localhost", "root", "", "foxord");

session_start();
$fname=$_SESSION['fullname'];

$query = "Select * from admission where fullName='{$fname}'";

$res=mysqli_query($conn, $query);

$row=mysqli_fetch_assoc($res);


function DisplayText($fontStyle, $text, $y,$linebreak=false)
{
    global $pdf;

    $pdf-> SetFont("Arial","{$fontStyle}",12);
    $pdf->Write($y, "{$text}");

    if($linebreak)
       $pdf->Ln(18);

}


$image="../../../img/foxord_logo.jpg";

$pdf =new FPDF();
$pdf-> AddPage();

$pdf-> Image('profileimage/'.$image,40,15,135,55);

$profile="../../../upload/{$row['photo']}";

DisplayText('b',"Name : ",120);
DisplayText('i',"{$row['fullname']}",120);

$pdf-> Image('profileimage/'.$profile,120,60,30,30);

DisplayText('i',"",120,true);

DisplayText('b',"Father's Name : ",120);
DisplayText('i',"{$row['fathername']}",120,true);

DisplayText('b',"Mother's Name : ",120);
DisplayText('i',"{$row['mothername']}",120,true);

DisplayText('b',"Address : ",120);
DisplayText('i',"{$row['address']}",120,true);

DisplayText('b',"Phone Number : ",120);
DisplayText('i',"{$row['phone']}",120,true);

DisplayText('b',"Email : ",120);
DisplayText('i',"{$row['email']}",120,true);

DisplayText('b',"Course : ",120);
DisplayText('i',"{$row['course']}",120,true);

DisplayText('i',"_________________________________",120);

$pdf->Ln(10);

DisplayText('i',"Admission fee -/Rs.10000 have to be deposited on college.",120);



$pdf->Output();

session_unset();
session_destroy();
?>
