<?php
$pageTitle   = 'Acasă';
$currentPage = 'home';
$css = ['mainPage'];
$js  = ['mainPage'];

$slides = [
    ['img' => 'assets/img/image.png', 'title' => 'Găsește freelancerul potrivit', 'text' => 'Sute de specialiști gata să înceapă proiectul tău.'],
    ['img' => 'assets/img/image2.png', 'title' => 'Publică un proiect în câteva minute', 'text' => 'Descrie ce ai nevoie și primește oferte rapid.'],
    ['img' => 'assets/img/image3.png', 'title' => 'Lucrează sigur și transparent', 'text' => 'Plăți securizate și comunicare clară între părți.'],
];

require __DIR__ . '/../../components/header.php';
?>
<div class="stage">
<section class="hero">
    <h1>Bine ai venit pe <?= NUME_PROIECT ?></h1>
    <p>Platformă pentru gestionarea freelancerilor, serviciilor oferite și disponibilității acestora.</p>
</section>

<section class="carousel" id="carousel" aria-label="Galerie">
    <div class="slides">
        <?php foreach ($slides as $i => $s): ?>
            <figure class="slide <?= $i === 0 ? 'active' : '' ?>">
                <img src="<?= $s['img'] ?>" alt="<?= htmlspecialchars($s['title']) ?>">
                <figcaption>
                    <h3><?= $s['title'] ?></h3>
                    <p><?= $s['text'] ?></p>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </div>

    <button class="arrow prev" aria-label="Imaginea anterioară">&#10094;</button>
    <button class="arrow next" aria-label="Imaginea următoare">&#10095;</button>

    <div class="dots">
        <?php foreach ($slides as $i => $s): ?>
            <button class="dot <?= $i === 0 ? 'active' : '' ?>" data-index="<?= $i ?>" aria-label="Imaginea <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
    </div>
</section>
</div>

<section class="cards">
    <article><h3>Freelanceri</h3><p>Programatori, designeri și redactori verificați.</p></article>
    <article><h3>Clienți</h3><p>Publică proiecte și alege oferta potrivită.</p></article>
    <article><h3>Servicii</h3><p>Web, mobile, grafică, traduceri și multe altele.</p></article>
</section>

<?php require __DIR__ . '/../../components/footer.php'; ?>