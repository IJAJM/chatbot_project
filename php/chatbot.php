<?php
require 'vendor/autoload.php';

use Phpml\Classification\NaiveBayes;

$nb = new NaiveBayes();

// Data training (bisa dikembangkan lebih lanjut)
$samples = ['halo', 'siapa kamu', 'apa kabar'];
$labels = ['Halo, bagaimana saya bisa membantu?', 'Saya chatbot sederhana.', 'Saya baik, bagaimana denganmu?'];

$nb->train($samples, $labels);

// Proses input pengguna
$input = $_POST['input'] ?? '';
$response = 'Maaf, saya tidak mengerti.';

if (!empty($input)) {
    $response = $nb->predict([$input])[0] ?? 'Maaf, saya tidak mengerti.';
}

echo json_encode(['response' => $response]);
?>
