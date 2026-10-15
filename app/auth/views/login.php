<?php
$pageTitle   = 'Autentificare';
$currentPage = 'login';
$css = ['auth'];
$js  = ['auth'];

require __DIR__ . '/../../components/header.php';
?>
<section class="login-box">
    <h1>Autentificare</h1>
    <p class="muted">Introdu datele contului tău.</p>

    <form data-demo>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="nume@exemplu.com">

        <label for="password">Parolă</label>
        <input type="password" id="password" name="password" placeholder="••••••••">

        <button type="submit" class="btn">Conectează-te</button>
    </form>
</section>

<?php require __DIR__ . '/../../components/footer.php'; ?>