<?php
// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>');
//$url = 'http://www.codexworld.com/convert-html-to-pdf-php-dompdf/';
$url = 'html_content_file.html';
$file_content = file_get_contents($url);
$dompdf->loadHtml($file_content);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
//$dompdf->stream();
// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream("codexworld",array("Attachment"=>1));
?>