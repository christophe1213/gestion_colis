<?php
    use  Dompdf\Dompdf;
    require_once 'dompdf/autoload.inc.php';
    $pdf = new Dompdf();
    ob_start();
    require_once 'facture.html';
    $html=ob_get_contents();
    ob_end_clean();
    $pdf->loadHtml($html);
    $pdf->render();
    $pdf->stream('Fichier.pdf');

?>