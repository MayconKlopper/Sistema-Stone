<?php
  
  session_start();
  if($_SESSION['login']!=1)
  {
    header('location:index.php');
  }
  include('conexaodb.php');
	
	$query = "SELECT id, nome, sobrenome, estado, cidade, cep, rua, complemento, fixo, celular, genero

            FROM clientes";

      $recordset = mysql_query($query,$conn);

      $l = 2;


// Incluimos a classe PHPExcel
include('C:\xampp\htdocs\stone\Classes\PHPExcel.php');

// Instanciamos a classe
$objPHPExcel = new PHPExcel();

// Definimos o estilo da fonte
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

// Criamos as colunas
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue("A1", "ID" )
            ->setCellValue("B1", "NOME" )
            ->setCellValue("C1", "SOBRENOME" )
            ->setCellValue("D1", "ESTADO" )
            ->setCellValue("E1", "CIDADE" )
            ->setCellValue("F1", "CEP" )
            ->setCellValue("G1", "RUA" )
            ->setCellValue("H1", "COMPLEMENTO" )
            ->setCellValue("I1", "FIXO" )
            ->setCellValue("J1", "CELULAR" )
            ->setCellValue("K1", "GÊNERO" );

// Podemos configurar diferentes larguras paras as colunas como padrão
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(14);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(6);

while($vetor = mysql_fetch_assoc($recordset))
{

    $c = 0;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['id']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['nome']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['sobrenome']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['estado']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['cidade']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['cep']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['rua']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['complemento']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['fixo']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['celular']);
    $c++;
    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($c, $l, $vetor['genero']);
    $l++;
}


// Podemos renomear o nome das planilha atual, lembrando que um único arquivo pode ter várias planilhas
$objPHPExcel->getActiveSheet()->setTitle('Lista de clientes');

// Cabeçalho do arquivo para ele baixar
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="lista_de_clientes.xls"');
header('Cache-Control: max-age=0');
// Se for o IE9, isso talvez seja necessário
header('Cache-Control: max-age=1');

// Acessamos o 'Writer' para poder salvar o arquivo
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

// Salva diretamente no output, poderíamos mudar arqui para um nome de arquivo em um diretório ,caso não quisessemos jogar na tela
$objWriter->save('php://output'); 

exit;

?>