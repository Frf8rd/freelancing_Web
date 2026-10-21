<?php
$pageTitle = 'Înregistrare';
$currentPage = 'register';
$css = ['auth'];
$mesaj = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nume = trim($_POST['nume'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $parola = trim($_POST['password'] ?? '');
    if ($nume === '' || $email === '' || $parola === '') {
        $mesaj = 'Completează toate câmpurile obligatorii.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mesaj = 'Introdu o adresă de e-mail validă.';
    } else {
        $_SESSION['utilizator'] = $nume;
        $_SESSION['email'] = $email;
        $_SESSION['rol'] = strcasecmp($email, EMAIL_ADMIN) === 0 ? 'admin' : 'utilizator';
        $paginaCont = $_SESSION['rol'] === 'admin' ? 'admin' : 'cont';
        header('Location: index.php?page=' . $paginaCont);
        exit;
    }
}

require __DIR__ . '/../../components/header.php';
?>
<section class="login-box">
    <h1>Înregistrare</h1>
    <p class="muted">Conturile sunt simulate pentru laborator și nu se salvează permanent.</p>
    <?php if ($mesaj !== ''): ?><p class="form-message"><?= htmlspecialchars($mesaj) ?></p><?php endif; ?>
    <form method="post" action="index.php?page=register">
        <label for="nume">Nume</label>
        <input id="nume" name="nume" value="<?= htmlspecialchars($_POST['nume'] ?? '') ?>" required>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        <label for="password">Parolă</label>
        <input id="password" name="password" type="password" required>
        <button type="submit" class="btn">Creează cont</button>
    </form>
</section>
<?php require __DIR__ . '/../../components/footer.php'; ?>
