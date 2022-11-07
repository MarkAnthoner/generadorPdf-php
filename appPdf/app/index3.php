<?php

require_once('../vendor/autoload.php');

//plantilla html
require_once('plantilla3/plantillaCertificado.php');

//plantilla css
$css = file_get_contents('plantilla3/style.css');

$mpdf = new \Mpdf\Mpdf([
    "format" => "A4-L",
    'setAutoTopMargin' => 'stretch',
        'autoMarginPadding' => 0,
        'bleedMargin' => 0,
        'crossMarkMargin' => 0,
        'cropMarkMargin' => 0,
        'nonPrintMargin' => 0,
        'margBuffer' => 0,
        'collapseBlockMargins' => false,
]);

$plantilla = getPlantilla();

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output("conctancia.pdf", "I");

?>