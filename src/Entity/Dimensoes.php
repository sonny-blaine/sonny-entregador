<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Dimensoes
 * @package App\Entity
 * @ORM\Embeddable()
 */
class Dimensoes
{
    /**
     * @ORM\Column(type="float")
     */
    private $altura = 0;

    /**
     * @ORM\Column(type="float")
     */
    private $largura = 0;

    /**
     * @ORM\Column(type="float")
     */
    private $comprimento = 0;

    /**
     * @ORM\Column(type="float")
     */
    private $peso = 0;
}