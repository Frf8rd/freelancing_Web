<?php

require_once __DIR__ . "/../../config/app.php";

$pageTitle   = $pageTitle ?? NUME_PROIECT;
$currentPage = $currentPage ?? '';
$css         = $css ?? [];
$js          = $js ?? [];
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle) ?> | <?= NUME_PROIECT ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
    <?php foreach ($css as $file): ?>
        <link rel="stylesheet" href="assets/css/<?= $file ?>.css">
    <?php endforeach; ?>

    <script src="assets/js/script.js" defer></script>
    <?php foreach ($js as $file): ?>
        <script src="assets/js/<?= $file ?>.js" defer></script>
    <?php endforeach; ?>
</head>

<body>

    <header class="site-header">
        <button class="icon-btn" id="menuOpen" aria-label="Deschide meniul" aria-controls="sidebar" aria-expanded="false">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path d="M4 8h16M4 16h10" />
            </svg>
        </button>

        <a class="brand" href="index.php"><?= NUME_PROIECT ?></a>

        <a class="icon-btn" href="index.php?page=login" aria-label="Autentificare">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="4" />
                <path d="M4 21c0-4 4-7 8-7s8 3 8 7" />
            </svg>
        </a>
    </header>

    <div class="overlay" id="overlay"></div>

    <aside class="sidebar" id="sidebar" aria-hidden="true">
        <button class="icon-btn" id="menuClose" aria-label="Închide meniul">✕</button>
        <nav>
            <?php foreach ($menuItems as $slug => $label): ?>
                <a href="index.php?page=<?= $slug ?>" class="<?= $slug === $currentPage ? 'active' : '' ?>"><?= $label ?></a>
            <?php endforeach; ?>
        </nav>
    </aside>

    <main class="site-body">