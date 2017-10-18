<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection as Pacotes;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="carga")
 */
class Carga
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $situacao;

    /**
     * @var Volume
     * @ORM\OneToMany(targetEntity="App\Entity\Volume", mappedBy="carga")
     */
    private $volume;

    /**
     * @var Entregador
     * @ORM\ManyToOne(targetEntity="App\Entity\Entregador")
     */
    private $entregador;

}