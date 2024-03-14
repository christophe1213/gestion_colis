<?php
    use  Dompdf\Dompdf;
    require_once'dompdf/autoload.inc.php';
    $pdf = new Dompdf();
    $pdf->loadHtml('Hello');
    $pdf->render();
    $pdf->stream('');

?>