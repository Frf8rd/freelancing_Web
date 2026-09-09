<?php
?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <title><?= $denumireProiect ?></title>
    <link rel="stylesheet" href="../../../public/assets/css/preview.css">
</head>

<body>

    <h1><?= $denumireProiect ?></h1>

    <h2>Informații despre proiect</h2>

    <p><strong>Autor:</strong> <?= $autor ?></p>

    <p><strong>Grupa:</strong> <?= $grupa ?></p>

    <p><strong>Descriere:</strong> <?= $descriere ?></p>

    <p><strong>Utilizatori principali:</strong> <?= $utilizatoriPrincipali ?></p>

    <p><strong>Entități planificate:</strong> <?= $entitatiPlanificate ?></p>


    <h2>Datele freelancerului</h2>

    <p><strong>ID:</strong> <?= $id ?></p>

    <p><strong>Nume:</strong> <?= $name ?></p>

    <p><strong>Email:</strong> <?= $email ?></p>

    <p><strong>Skills:</strong> <?= $skills ?></p>

    <p><strong>Experiență:</strong> <?= $experience ?> ani</p>

    <p><strong>Tarif pe oră:</strong> <?= $hourlyRate ?> €</p>

    <p><strong>Rating:</strong> <?= $rating ?></p>

    <p>
        <strong>Disponibil:</strong>
        <?= $isAvailable ? "Da" : "Nu" ?>
    </p>


    <h2>Calcule</h2>

    <p><strong>Ore lucrate:</strong> <?= $oreLucrate ?></p>

    <p><strong>Cost proiect:</strong> <?= $costProiect ?> €</p>

    <p><strong>Comision platformă:</strong> <?= $comisionPlatforma ?> €</p>

    <p><strong>Câștig freelancer:</strong> <?= $castigFreelancer ?> €</p>


    <hr>

    <footer>
        <p><strong>Autor:</strong> <?= $autor ?></p>
        <p><strong>Versiunea aplicației:</strong> <?= VERSIUNE_APLICATIE ?></p>
    </footer>

</body>

</html>

