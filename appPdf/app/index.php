<?php

require_once('../vendor/autoload.php');

//plantilla html
require_once('plantillas/plantilla2.php');

//plantilla css
$css = file_get_contents('plantillas/style.css');

$mpdf = new \Mpdf\Mpdf([
    "format" => "A4-L"
]);

$plantilla = getPlantilla();

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("conctancia.pdf", "I");

?>