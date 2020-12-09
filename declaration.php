<?php
    $stdName = $_POST["stdname"];
    $coordCity = $_POST["cdcity"];
    $html = '<body>
    <div class="wrapper">
        <header>
            <img id="logo" src="./media/logo.png" alt="Logo Minds" width="200px">
            <h1> '. $coordCity .' - data</h1>
        </header>
        <div class="container">
            <h1>DECLARAÇÃO</h1>
        </div>


    </div>
</body>';

    $stylesheet = file_get_contents('./styledec.css');
    require_once __DIR__ . './vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->SetTitle('DECLARAÇÃO - ' . $stdName);
    $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->WriteHTML($html);
    $mpdf->Output();
?>