<?php
$pageTitle = 'Contul meu';
$currentPage = 'cont';
require __DIR__ . '/../../components/header.php';
?>
<section class="page">
    <h1>Contul meu</h1>
    <p>Bun venit, <?= htmlspecialchars($_SESSION['utilizator'] ?? 'utilizator') ?>. Rolul de utilizator poate consulta paginile publice și acest cont demonstrativ.</p>
</section>
<?php require __DIR__ . '/../../components/footer.php'; ?>
