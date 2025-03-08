<?php
$modul = $_GET['modul'] ?? 'home';
$fitur = $_GET['fitur'] ?? 'homepage';

switch($modul) {
    case 'home':
        include './resources/views/frontPage.php';
        break;
}