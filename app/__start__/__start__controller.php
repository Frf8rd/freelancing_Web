<?php

function vr_df()
{

    $denumireProiect = "Sistem de gestionare a unei platforme de freelancing";
    $autor = "Ion Russu";
    $grupa = "PAPP-231";

    $descriere = "Platformă pentru gestionarea freelancerilor, serviciilor oferite și disponibilității acestora.";

    $utilizatoriPrincipali = "Freelanceri și clienți";
    $entitatiPlanificate = "Freelancer, Client, Proiect, Serviciu";


    define("VERSIUNE_APLICATIE", "1.0");


    $id = 1;
    $name = "Ion Russu";
    $email = "ill56e.com";
    $password = "123456";
    $skills = "PHP, JavaScript, MySQL";
    $experience = 2;
    $hourlyRate = 15;
    $rating = 4.8;
    $isAvailable = true;

    
    $oreLucrate = 20;

    //cazul 1
    $costProiect = $hourlyRate * $oreLucrate;

    $comisionPlatforma = $costProiect * 10 / 100;

    $castigFreelancer = $costProiect - $comisionPlatforma;


    //cazul 2
    $oreLucrate = 25;
    $costProiect = $hourlyRate * $oreLucrate;

    $comisionPlatforma = $costProiect * 10 / 100;

    $castigFreelancer = $costProiect - $comisionPlatforma;

    //cazul 3
    $oreLucrate = 50;
    $costProiect = $hourlyRate * $oreLucrate;

    $comisionPlatforma = $costProiect * 10 / 100;

    $castigFreelancer = $costProiect - $comisionPlatforma;

    require __DIR__ . "/views/__start__.php";
}

