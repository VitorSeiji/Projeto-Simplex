<?php
//ini_set('display_errors',1);
//error_reporting(6143);
if (!empty($_REQUEST['pag']) and file_exists('./controller/'.$_REQUEST['pag'].'.php')) {
	$pagina=$_REQUEST['pag'];
	require_once('./controller/'.$pagina.'.php');
	$pagina = new $pagina();
	$conteudo=$pagina->GetConteudo();
	mostraConteudo($conteudo);
	unset($pagina);
} 

function mostraConteudo($conteudo){
	require_once('./libraries/mpdf60/mpdf.php');
	$mpdf = new mPDF('pt','A4',3,'',8,8,55,25,9,9,'P');// cria um novo container PDF no formato A4 com orientação customizada
	$mpdf->allow_charset_conversion=true;// permite a conversao (opcional)
	$mpdf->charset_in='UTF-8'; // converte todo o PDF para utf-8	
	$mpdf->SetDisplayMode('fullpage');// modo de visualização
	$conteudo.='<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><style>.padding5{padding: 10px;}</style>'.$conteudo;
	$mpdf->WriteHTML($conteudo,0);
	// escreve definitivamente o conteudo no PDF
	$mpdf->Output();
	// imprime	
	exit();
}
?>