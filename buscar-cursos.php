#!/usr/bin/env php
<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use BuscadorDeCursos\{ Buscador, Cursos };

/* Teste::metodo();
exit(); */

teste();
exit();

$client = new Client(['verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$cursos = new Cursos($buscador->buscarCursos('https://www.alura.com.br/cursos-online-programacao/php'));

echo $cursos;