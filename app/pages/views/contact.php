<?php
$pageTitle   = 'Contact';
$currentPage = 'contact';
$css = ['auth'];

$mesaj = '';
$tipMesaj = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nume = trim($_POST['nume'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $continut = trim($_POST['mesaj'] ?? '');
    if ($nume === '' || $email === '' || $continut === '') {
        $mesaj = 'Completează toate cele trei câmpuri obligatorii.';
        $tipMesaj = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mesaj = 'Introdu o adresă de e-mail validă.';
        $tipMesaj = 'error';
    } else {
        $mesaj = 'Mulțumim, ' . $nume . '! Mesajul tău a fost prelucrat .';
        $tipMesaj = 'success';
    }
}

require __DIR__ . '/../../components/header.php';
?>
<section class="page">
    <h1>Contact</h1>
    <p>Ne poți scrie la contact@freelancehub.local. Programul de lucru: luni–vineri, 9:00–18:00.</p>
</section>
<section class="content-panel">
    <h2>Trimite un mesaj</h2>
    <?php if ($mesaj !== ''): ?><p class="form-message <?= $tipMesaj ?>"><?= htmlspecialchars($mesaj) ?></p><?php endif; ?>
    <form class="stack-form" method="post" action="index.php?page=contact">
        <label for="nume">Nume *</label><input id="nume" name="nume" value="<?= htmlspecialchars($_POST['nume'] ?? '') ?>" required>
        <label for="email">Email *</label><input id="email" name="email" type="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        <label for="mesaj">Mesaj *</label><textarea id="mesaj" name="mesaj" rows="4" required><?= htmlspecialchars($_POST['mesaj'] ?? '') ?></textarea>
        <button class="btn" type="submit">Trimite mesajul</button>
    </form>
</section>

<?php require __DIR__ . '/../../components/footer.php'; ?>
