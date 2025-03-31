<?php
require "config.php";
/** @var PDO $pdo */

require('../fpdf/fpdf.php');

$list = [];
$stmt = $pdo->query("SELECT * FROM produtos");

if ($stmt->rowCount() > 0) {
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Lista de Produtos', 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 12);

// Adicionar produtos ao PDF
foreach ($list as $prod) {
    $pdf->Cell(0, 10, $prod["descricao"] . " - Qtd: " . $prod["quantidade"] . " - Preco: " . $prod["preco"], 0, 1);
}

$reportDir = __DIR__ . '/../relatorios';
if (!is_dir($reportDir)) {
    mkdir($reportDir, 0755, true);
}

// Salvar o PDF na pasta do projeto
$fileName = 'relatorio_produtos_' . date('Y-m-d_H-i-s') . '.pdf';
$filePath = $reportDir . '/' . $fileName;
$pdf->Output('F', $filePath);

$pdfUrl = '../relatorios/' . $fileName;

header("Location: $pdfUrl");
exit;
?>
