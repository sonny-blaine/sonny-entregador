<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="entregador")
 */
class Entregador
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="App\Entity\Carga", mappedBy="entregador")
     */
    public $cargas;

    /**
     * @var Rota
     * @ORM\ManyToOne(targetEntity="App\Entity\Rota")
     */
    public $rota;

}