<?php

/**
 * Ici, je vais déclarer toutes les fonctions utiles au site
 */

/**
 * Permet de convertir des minutes en heures
 * Exemple: 145 devient 2h25
 */
function convertToHours($duration) {
    $hours = floor($duration / 60); // 2.40 devient 2
    $minutes = $duration % 60; // 25
    $minutes = str_pad($minutes, 2, 0, STR_PAD_LEFT); // 2 devient 02
    // Méthode alternative
    // if ($minutes < 10) {
    //    $minutes = '0'.$minutes;
    // }

    // Méthode alternative 2
    // date('i\hs', $duration);

    return $hours.'h'.$minutes;
}

/**
 * Formate une date au format US en FR
 * 1985-10-15 -> 1574124485 -> 15 octobre 1985 ou octobre 1985
 */
function formatDate($date, $format = '%d %B %Y') {
    setlocale(LC_ALL, 'fr.utf-8');

    return strftime($format, strtotime($date));
}
