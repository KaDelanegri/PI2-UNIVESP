
<?php 

use Dompdf\ Dompdf; 
session_start();
require ('dompdf/autoload.inc.php'); //incluindo autoload

$dompdf = new Dompdf(["enable_remote"=> true]); 

ob_start();
$caminho = "pdf/certificado.php";
require("$caminho"); 
$dompdf->loadHtml(ob_get_clean());

$dompdf->setPaper("A4");

$dompdf->render();
$dompdf->stream("relatorio.pdf", ["Attachment" => false]);


?>