<?php
include 'phpqrcode.php'; 

$id=$_GET['id'];


QRcode::png("$id");
function png($text, $outfile=false, $level=QR_ECLEVEL_L, $size=5, $margin=1, $saveandprint=false)  

{ 

    $enc = QRencode::factory($level, $size, $margin); 

    return $enc->encodePNG($text, $outfile, $saveandprint=false); 

}

