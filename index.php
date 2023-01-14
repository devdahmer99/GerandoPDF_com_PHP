<?php

use Mpdf\Mpdf;

ob_start();
?>
<html>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <h1>Relatório</h1>
    <table class="table-auto">
        <tr>
            <th>Nome do cliente</th>
            <th>Valor do Serviço</th>
            <th>Data de Entrega</th>
        </tr>
        <tr>
            <td>Eduardo Dahmer</td>
            <td>R$8.000,00</td>
            <td>14/01/2023</td>
        </tr>
    </table>
</html>




<?php 
$html = ob_get_contents();
ob_end_clean();

echo $html;

require 'vendor/autoload.php';

$mpdf = new Mpdf();

$mpdf->WriteHTML($html);
$mpdf->Output('arquivo.pdf', 'D');
?>