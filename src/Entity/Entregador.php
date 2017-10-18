<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="entregador")
 */
class Entregador
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pessoa")
     * @var Pessoa
     */
    private $pessoa;

    /**
     * @ORM\Column(type="string")
     */
    private $veiculo;
}