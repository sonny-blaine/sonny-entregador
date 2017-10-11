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
    public $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    public $situacao;

    /**
     * @var Pacotes
     * @ORM\OneToMany(targetEntity="App\Entity\Pacote", mappedBy="carga")
     */
    public $pacotes;

    /**
     * @var Entregador
     * @ORM\ManyToOne(targetEntity="App\Entity\Entregador", inversedBy="cargas")
     */
    public $entregador;


}