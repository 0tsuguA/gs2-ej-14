<?php

header('Content-Type: application/json');

require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';

require_once '../jugadores/response/consultarTodosResponse.php';

$c1 = new Club();
$c1->Nombre = 'Paris Saint-Germain Football Club';
$c1->Fundacion = '2 de agosto de 1970 (52 años)';
$c1->Presidente = 'Nasser Al-Khelaifi';

$j1 = new Jugador();
$j1->Id = 1;
$j1->Nombre = 'Lionel Andrés Messi';
$j1->Apodos = 'La Pulga,  El Mesías,  D10S';
$j1->Club = $c1;
$j1->Altura = '1.70 m';

$c2 = new Club();
$c2->Nombre = 'Manchester United Football Club';
$c2->Fundacion = '5 de marzo de 1878 (144 años)';
$c2->Presidente = 'Joel Glazer';

$j2 = new Jugador();
$j2->Id = 2;
$j2->Nombre = 'Lisandro Martínez';
$j2->Apodos = 'La Pulga,  El Mesías,  D10S';
$j2->Club = $c2;
$j2->Altura = '1.75 m';

$lj = new consultarTodosResponse();
$lj->ListJugadores[] = $j1;
$lj->ListJugadores[] = $j2;

echo json_encode($lj);
