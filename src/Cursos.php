<?php

namespace BuscadorDeCursos;

class Cursos
{
    public function __construct(
        private $cursos
    ) {
    }

    public function __toString()
    {
        $str = '';
        foreach ($this->cursos as $curso) {
            $str .= $curso . PHP_EOL;
        }
        return $str;
    }
}
