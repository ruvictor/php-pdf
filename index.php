<?php
if($_POST){
    require('fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf -> AddPage();
    // SetFont(font, style, size)
    // Cell(width, height, content, nextline parametters, alignement[c - center])
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hello World!');
    $pdf->Output();
    $pdf -> output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF using PHP</title>
</head>
<body>
    <form action='' method="POST">
        <input type="text" name="name" /><br />
        <input type="submit" value="ok" />
    </form>
</body>
</html>