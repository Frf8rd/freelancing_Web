<?php
$pageTitle   = 'Servicii';
$currentPage = 'servicii';
$css = ['auth'];

$servicii = [
    ['nume' => 'Dezvoltare web', 'categorie' => 'programare', 'descriere' => 'Site-uri și aplicații web realizate la comandă.'],
    ['nume' => 'Design grafic', 'categorie' => 'design', 'descriere' => 'Identitate vizuală, bannere și materiale digitale.'],
    ['nume' => 'Redactare și traduceri', 'categorie' => 'text', 'descriere' => 'Conținut clar și traduceri pentru proiecte.'],
];
$termen = trim($_GET['q'] ?? '');
$rezultate = array_filter($servicii, function ($serviciu) use ($termen) {
    return $termen === '' || stripos($serviciu['nume'] . ' ' . $serviciu['categorie'] . ' ' . $serviciu['descriere'], $termen) !== false;
});

require __DIR__ . '/../../components/header.php';
?>
<section class="page">
    <h1>Servicii</h1>
    <p>Freelancerii oferă servicii de dezvoltare web, design grafic, redactare și traduceri. Fiecare serviciu are un tarif pe oră și o descriere clară.</p>
</section>
<section class="content-panel">
    <h2>Caută un serviciu</h2>
    <form class="search-form" method="get" action="index.php">
        <input type="hidden" name="page" value="servicii">
        <label for="q">Denumire sau categorie</label>
        <input id="q" name="q" value="<?= htmlspecialchars($termen) ?>" placeholder="ex. design">
        <button class="btn" type="submit">Caută</button>
    </form>
    <?php if ($rezultate): ?>
        <div class="service-list">
            <?php foreach ($rezultate as $serviciu): ?>
                <article><h3><?= htmlspecialchars($serviciu['nume']) ?></h3><p><?= htmlspecialchars($serviciu['descriere']) ?></p></article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="form-message">Nu există servicii pentru „<?= htmlspecialchars($termen) ?>”.</p>
    <?php endif; ?>
</section>

<?php require __DIR__ . '/../../components/footer.php'; ?>
