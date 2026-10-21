<?php
$pageTitle   = 'Autentificare';
$currentPage = 'login';
$css = ['auth'];
$js  = ['auth'];
$mesaj = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $parola = trim($_POST['password'] ?? '');
    if ($email === '' || $parola === '') {
        $mesaj = 'Completează emailul și parola.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mesaj = 'Introdu o adresă de e-mail validă.';
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['rol'] = strcasecmp($email, EMAIL_ADMIN) === 0 ? 'admin' : 'utilizator';
        $_SESSION['utilizator'] = $email;
        $paginaCont = $_SESSION['rol'] === 'admin' ? 'admin' : 'cont';
        header('Location: index.php?page=' . $paginaCont);
        exit;
    }
}

require __DIR__ . '/../../components/header.php';
?>
<section class="login-box">
    <h1>Autentificare</h1>
    <p class="muted">Cont demonstrativ fără bază de date. Emailul <?= htmlspecialchars(EMAIL_ADMIN) ?> simulează rolul de administrator.</p>

    <?php if (!empty($mesaj)): ?><p class="form-message"><?= htmlspecialchars($mesaj) ?></p><?php endif; ?>

    <form method="post" action="index.php?page=login">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="nume@exemplu.com" required>

        <label for="password">Parolă</label>
        <input type="password" id="password" name="password" placeholder="••••••••" required>

        <button type="submit" class="btn">Conectează-te</button>
    </form>
    <p class="auth-link">Nu ai cont? <a href="index.php?page=register">Înregistrează-te</a></p>
</section>

<?php require __DIR__ . '/../../components/footer.php'; ?>
