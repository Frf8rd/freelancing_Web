<?php
$pageTitle = 'Administrare';
$currentPage = 'admin';
require __DIR__ . '/../../components/header.php';
?>
<section class="page">
    <h1>Administrare</h1>
    <p>Bun venit, <?= htmlspecialchars($_SESSION['utilizator'] ?? 'administrator') ?>. Această pagină este disponibilă doar rolului de administrator demonstrativ.</p>
</section>
<?php require __DIR__ . '/../../components/footer.php'; ?>
