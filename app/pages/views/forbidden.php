<?php
$pageTitle = 'Acces restricționat';
require __DIR__ . '/../../components/header.php';
?>
<section class="page">
    <h1>Acces restricționat</h1>
    <p>Pagina de administrare este disponibilă numai rolului de administrator. Autentificăte cu <?= htmlspecialchars(EMAIL_ADMIN) ?> pina cind.</p>
</section>
<?php require __DIR__ . '/../../components/footer.php'; ?>
