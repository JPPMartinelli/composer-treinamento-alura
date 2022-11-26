<?php

namespace BuscadorDeCursos;

class Buscador
{
    public function __construct(
        private $httpClient,
        private $crawler
    ) {
    }

    public function buscarCursos($url)
    {
        $response = $this->httpClient->request(method: 'GET', uri: $url);
        $html = $response->getBody();

        $this->crawler->addHtmlContent($html);

        $elementosCursos = $this->crawler->filter('span.card-curso__nome');

        $cursos = [];

        foreach ($elementosCursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        return $cursos;
    }
}
